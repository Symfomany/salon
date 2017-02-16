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

        $resultat = Excel::load(base_path("import/{$id}.xls"), function($reader){
        // Getting all results
        $reader->noHeading();
        //$reader->ignoreEmpty();
            // Handle the import
        $results = $reader->skip(9)->get();



        // Loop through all sheets
       //$sheet =  $reader->first();
        foreach($reader->get() as $sheet){
            // Loop through all rows
            foreach($sheet as $row){
                  if(!empty($row) && $row != "null"){
                    $tab[] = $row;
                  }

            }
        }
        // $sheet->each(function($row) {
            // if($row != null){
            // }
        // });
        


        });
        dump($tab);
        exit(dump($resultat->all()));
        
        $resultatOne = $resultat->take(6)->get();
        $resultatTwo = $resultat->skip(6)->take(6)->get();
        $resultatThree = $resultat->skip(12)->take(6)->get();
        $resultatFour = $resultat->skip(18)->take(6)->get();
        $resultatFive = $resultat->skip(24)->take(6)->get();

        return view('provider.accords',
        compact("resultatOne","resultatTwo", "resultatThree","resultatFour","resultatFive"));

    }

    /**
    * Get Stream File in XLS
    */
    public function getOne($id){

        $resultat = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all();

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
