<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        Excel::load(base_path('import/OCAB.xls'), function($reader) {
                // get the results
            $results = $reader->get();
            //each feature
            foreach($results as $result){
                $columns  = $result->all();
            }
            
        });

        return ["id" => $id];
    }
}
