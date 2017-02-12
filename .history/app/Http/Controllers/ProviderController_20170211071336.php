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

        $ok = Storage::put(base_path('export/test.json'), new File());

        exit(dump($ok));
        return $resultat;

    }
}
