<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumController extends Controller
{
    public function twosums($nums, $targets){
        function twoSum($nums, $targets) {
            // $nums = [2,7,4,8,1];
            //  $targets = 9;
            //  $length = 5;
                  for($i = 0; $i < count($nums); $i++){
                      for($j = $i+1; $j <count($nums); $j++){
                         if($nums[$i] + $nums[$j] == $targets){
                             return [$i, $j];
                         }
                     }
                };
         }
       

        
    }
}
