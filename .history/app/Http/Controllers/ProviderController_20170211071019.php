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

        $ok = Storage::disk('local')->put('test.json', file_set_contents($resultat), 'public');

        exit(dump($ok));
        return $resultat;

    }
}
