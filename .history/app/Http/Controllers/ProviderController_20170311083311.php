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
        $resultat = Excel::load(base_path("fournisseurs/fournisseurs.xls"), function($reader){});
        exit(dump($resultat));
         foreach($resultat->get() as $sheet){

         }
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

        //send email
        Mail::send('provider.confirmation', ['user' => $register], function ($m) use ($register) {
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

        $resultat = Excel::load(base_path("import/{$id}.xlsx"), function($reader){});


        // Getting all results
        $resultat->noHeading();
        //$reader->ignoreEmpty();
            // Handle the import
        $results = $resultat->skip(9)->get();

        // Loop through all sheets
       //$sheet =  $reader->first();
        foreach($resultat->get() as $sheet){
            // Loop through all rows
            foreach($sheet as $key => $row){
                
                  if(!empty($row)){

                    if(!preg_match("/^[A-Z0-9\'ÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ ]+$/", $row)){ // is not a provider
                        $clef = $row;
                    }

                    if($row != $clef){
                        $tab[$clef][] = $row;
                    }else{
                        $tab[$clef]["intitule"] = $row;
                    }
                  }

            }
        }

     
        $resultat = collect($tab);
        $resultatOne = $resultat->take(17)->toArray();
        $resultatTwo = $resultat->slice(17, 6)->toArray();
        $resultatThree = $resultat->slice(23, 7)->toArray();
        $resultatFour = $resultat->slice(30, 5)->toArray();
        $resultatFive = $resultat->slice(35, 15)->toArray();

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
