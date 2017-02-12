<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        $tableau = [];

        Excel::load(base_path('import/OCAB.xls'), function($reader) {
                // get the results
            $results = $reader->get();

           

            //each feature
            foreach($results as $key => $result){
                $columns  = $result->all();

                foreach($columns as $column){
                    if(!empty(trim($column))){
                        $tableau[$key][] = $column;
                        dump($column);
                    }
                }
            }
            
        });

        dump($tableau);
        exit;

        return ["id" => $id];
    }
}
