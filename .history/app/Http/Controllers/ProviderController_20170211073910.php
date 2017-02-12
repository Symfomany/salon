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

            $resultat = Excel::load(base_path("import/{$file->getFilename()}"), function($reader){})->all();
            dump(basename($file->getPathname()));
            exit;

            File::put(public_path("export/{$id}.json"), $resultat);
        }

      

        return [true];
    }
}
