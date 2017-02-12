<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        Excel::load(base_path('import/OCsAB.xls'), function($reader) {
            exit(dump($reader));
        });

        return ["id" => $id];
    }
}
