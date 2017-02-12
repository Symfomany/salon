<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){


        Excel::load(base_path('import/OCAB.xls'), function($reader) {

            //each feature
            $reader->each(function($row, $key) {
                 $tableau = [];
                $columns  = $row->all();
                foreach( $columns as $column ){
                    if(!empty(trim($column))){
                        $tableau[$key][] = $column;
                    }
                }
            exit(dump($tableau));
                
            });


            return response()->json($tableau);
              
        });

        

    }
}
