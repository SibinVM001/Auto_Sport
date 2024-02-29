<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public static function priceConversion($var) {

        $price = str_split($var);
        $reversePrice = array_reverse($price);
        $newPrice = '';
        $lastString = '';
            
        for($i = 0; $i < count($price); $i++) {
            if($i > 2)
                $newPrice .= $reversePrice[$i];
            else
                $lastString .= $reversePrice[$i];
        }
            
        $array = str_split($newPrice);
        $x = '';
        $y = '';
        
        for($i = 0; $i < count($array); $i++) {
            if($i > 1)
                $x .= $array[$i];
            else 
                $y .= $array[$i];
        }
            

        $newArray = str_split($x);
        $a = '';
        $b = '';


        for ($i = 0; $i < count($newArray); $i++) {
            if ($i > 1)
                $a .= $newArray[$i]; 
            else
                $b .= $newArray[$i];
        }
            
        $convPrice = strrev($a).','.strrev($b).','.strrev($y).','. strrev($lastString);

        if ($convPrice[1] == ',')
            return substr($convPrice, 1);
        elseif ($convPrice[0] == ',')
            return substr($convPrice, 1);
        else
            return $convPrice;
    }
}
