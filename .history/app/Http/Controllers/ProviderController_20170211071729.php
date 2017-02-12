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

        // $thefile = \File::get($image);
        //  $file_name = $title->slug . '-' . $year . '.jpg';



         // Write the contents of a file
        File::put(base_path('export/test.txt'), 'contents');
        // Append to a file
        File::append(base_path('export/test.txt'), 'data');

        //$ok = Storage::disk('local')->put(base_path('export/test.txt'), "laaa.txt");

        //exit(dump($ok));
        return $resultat;

    }
}
