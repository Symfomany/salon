<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Storage;
use File;


class ProviderController extends Controller
{   


        /**
    * Get Stream File in XLS
    */
    public function getAccordOne($id){

        $resultat = Excel::load(base_path("import/{$id}.xls"), function($reader){});

        $resultatOne = $resultat->take(6)->get();

        $resultatTwo = $resultat->skip(6)->take(6)->get();

        $resultatThree = $resultat->skip(12)->take(6)->get();

        $resultatFour = $resultat->skip(18)->take(6)->get();

        $resultatFive = $resultat->skip(24)->take(6)->get();

        dump($resultatOne->items);

        return view('provider.accord',
        compact($resultatOne, $resultatTwo, $resultatThree, $resultatFour, $resultatFive));

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
