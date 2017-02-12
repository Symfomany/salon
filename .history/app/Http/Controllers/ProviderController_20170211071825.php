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

        File::put(base_path("export/{$id}.json"), $resultat);

        return $resultat;

    }
}
