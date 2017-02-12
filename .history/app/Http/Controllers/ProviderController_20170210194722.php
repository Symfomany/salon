<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        Excel::load(base_path('import/OCAB.xls'), function($reader) {
            exit(dump($reader));
             // get the results
        $results = $import->get();
        });

        return ["id" => $id];
    }
}
