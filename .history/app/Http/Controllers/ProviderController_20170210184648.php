<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        Excel::load('file.xls', function($reader) {

        });

        return ["id" => $id];
    }
}
