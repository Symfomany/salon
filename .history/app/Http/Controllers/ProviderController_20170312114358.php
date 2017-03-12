<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Storage;
use File;
use App\Provider;
use Mail;
class ProviderController extends Controller
{   

    /**
    * Get all names of Files imported
    */
    public function import(){
        $files = File::allFiles(base_path("import"));
        $tab = [];
        foreach($files as $file){
            $id =  explode(".", $file->getFilename());
            $tab[ucfirst($id[0])] =  null;
        }

        return $tab;
    }

    /**
    * Get Stream File in XLS
    */
    public function already(Request $request){
            return Provider::where('email', $request->email)->count();
    }


    public function fournisseurs(){

        $tab =  [
            "FIDUCIAL" => "subscribed",
            "OFFICE DEPOT" => "subscribed",
            "LOXAM" => "subscribed",
            "KILOUTOU" => "subscribed"
        ];

        $liste = [];
        if(!empty($tab)){
            $resultat = Excel::load(base_path("fournisseurs/fournisseurs.xls"), function($reader){});
            foreach($resultat->get() as $sheet){
                if(isset($tab[strtoupper($sheet['label'])])){
                    $liste[] = $sheet;
                }
            }
        }
       
         dump($liste);
         exit;
    }

    public function excel(){
        $users = Provider::all();
        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());
        $csv->insertOne(['Nom','Prenom','Email','Siret','Compagny','Fonction','Telephone','Coopérative','Accords','Date de création', 'Date de modification']);

        foreach($users as $user){
            $tab = $user->toArray();
            $tab['accords'] = json_encode($tab['accords']);
            unset($tab['_id']);

        
            $csv->insertOne($tab);
        }
        $csv->output('people.csv');

    }

    /**
    * Get Stream File in XLS
    */
    public function register(Request $request){

        $register = new Provider;
        $register->lastname = $request->lastname;
        $register->firstname = $request->firstname;
        $register->email = $request->email;
        $register->siren = $request->siren;
        $register->compagny = $request->compagny;
        $register->fonction = $request->fonction;
        $register->phone = $request->phone;
        $register->cooperative = $request->cooperative;
        $register->accords = $request->accords;

        $register->save();

        //just member
        $tab = array_filter($register->accords, function($value){
            return $value == "subscribed";
        });

        $liste = [];
        if(!empty($tab)){
            $resultat = Excel::load(base_path("fournisseurs/fournisseurs.xls"), function($reader){});
            foreach($resultat->get() as $sheet){
                if(isset($tab[strtoupper($sheet['label'])])){
                    $liste[] = $sheet;
                }
            }
        }

        //send email
        Mail::send('provider.confirmation', [
            'user' => $register,
            'liste' => $liste
        ], function ($m) use ($register) {
            $m->from('hello@app.com', 'App of Salon ORCAB');
            $m->to($register->email, $register->lastname)->subject('Welcome to Salon ORCAB');
        });

        return [true];
    }

    /**
    * Get Stream File in XLS
    */
    public function getAccordOne($id){
        $tab = [];

        $resultat = Excel::load(base_path("import/ABCR.xlsx"), function($reader){});

        // Getting all results
        $resultat->noHeading();
        //$reader->ignoreEmpty();
            // Handle the import
        $results = $resultat->skip(8)->get();

        // Loop through all sheets
       //$sheet =  $reader->first();
       $compteur = 0; 
        $clef = "Fournitures de bureau et mobilier de bureau";
       
        foreach($resultat->get() as $sheet){
            // Loop through all rows
            foreach($sheet as $key => $row){

             

                  if(!empty($row) && strlen($row) > 2){
                      
                       if(!preg_match("/^[\[\]A-Z0-9\'ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ& ]{3,}+$/I", $row))
                        {
                           // is not a provider
                            $clef = $row;
                        }
                        if($row != $clef){
                            
                            $tab[$compteur][$clef][] = $row;
                        }else{
                            $tab[$compteur][$clef]["intitule"] = $row;
                        }
                    

                       if($row == "[MAINTENANCE ET ENTRETIEN DES LOCAUX]"){
                            $compteur = 1;
                        }else if($row == "[FINANCES & SOCIAL]"){
                            $compteur = 2;
                        }else if($row == "[CONSOMMABLES]"){
                            $compteur = 3;
                        }else if($row == "[VÉHICULES]"){
                            $compteur = 4;
                        }
                  
                  } 

            }
        }


     
        $resultat = collect($tab);

        dump($resultat);
        exit;

        $resultatOne = $resultat[0];
        $resultatTwo = $resultat[1];
        $resultatThree = $resultat[2];
        $resultatFour = $resultat[3];
        $resultatFive = $resultat[4];

       // dump($resultatOne, $resultatTwo, $resultatThree, $resultatFour, $resultatFive);
        // exit();

        return view('provider.accords',
        compact("resultatOne","resultatTwo", "resultatThree","resultatFour","resultatFive"));
    }

    /**
    * Get Stream File in XLS
    */
    public function getOne($id){

        $resultat = Excel::load(base_path("import/{$id}.xlsx"), function($reader){})->all();

        File::put(public_path("export/{$id}.json"), $resultat);

        return $resultat;
    }


    /**
    * Get All files in import  
    */
     public function getAll(){

        $files = File::allFiles(base_path("import"));

        foreach($files as $file){
            $resultat = Excel::load(base_path("import/{$file->getFilename()}"), function($reader){})->all();
            $id =  explode(".", $file->getFilename());
            File::put(public_path("export/{$id[0]}.json"), $resultat);
        }

        return ["Vos fichiers ont bien été générés"];
    }
}
