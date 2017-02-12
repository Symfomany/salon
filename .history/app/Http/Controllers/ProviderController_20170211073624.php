<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Storage;
use File;


class ProviderController extends Controller
{
    public function getOne($id){

        $resultat = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all();

        File::put(public_path("export/{$id}.json"), $resultat);

        return $resultat;
    }


     public function getAll(){

        $files = File::allFiles(base_path("import"));

        foreach($files as $file){
            dump($file->getFilename());
            exit;

            $resultat = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all();
            File::put(public_path("export/{$id}.json"), $resultat);

        }

      

        return [true];
    }
}
