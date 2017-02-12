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

        $resultatOne = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all()->take(6);
        
        $resultatTwo = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all()->skip(6)->take(6);

        $resultatThree = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all()->skip(12)->take(6);

        $resultatFour = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all()->skip(18)->take(6);

        $resultatFive = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all()->skip(24)->take(6);


        return view('provider.accord',$resultat);
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
