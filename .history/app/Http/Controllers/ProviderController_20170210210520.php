<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

        $tableau = [];

        Excel::load(base_path('import/OCAB.xls'), function($reader) {

            //each feature
            $reader->each(function($row, $key) {
                $columns  = $row->all();
                exit(dump($columns));
                if(!empty(trim($column))){
                    $tableau[$key][] = $column;
                }
            });

            exit(dump($tableau));


            return response()->json($tableau);
            
               
              
        });

        

    }
}
