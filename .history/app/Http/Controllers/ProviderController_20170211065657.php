<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Storage;


class ProviderController extends Controller
{
    public function getOne($id){

        $resultat = Excel::load(base_path("import/{$id}.xls"), function($reader){})->all();

        Storage::put('test.txt', "lala");

        Storage::put(base_path('export/{$id}.json'), $resultat);

        return $resultat;

    }
}
