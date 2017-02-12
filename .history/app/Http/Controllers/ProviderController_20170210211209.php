<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ProviderController extends Controller
{
    public function getOne($id){

      

        return Excel::load(base_path('import/OCAB.xls'), function($reader) {

             $tableau = [];
            //each feature
            $reader->each(function($row, $key) {
                $columns  = $row->all();
                foreach( $columns as $column ){
                    if(!empty(trim($column))){
                        $tableau[$key][] = $column;
                    }
                }
                dump($tableau);
            });


            return $tableau;

           // return response()->json($tableau);
        });

        

    }
}
