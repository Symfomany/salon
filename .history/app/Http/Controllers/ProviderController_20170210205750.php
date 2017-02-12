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

                foreach($columns as $title => $column){
                    if(!empty(trim($column)) &&  $title !== "intitule"){
                        $tableau[$key][] = $column;
                    }
                }
            }

               return response()
            ->json($tableau);
              
        });

    }
}
