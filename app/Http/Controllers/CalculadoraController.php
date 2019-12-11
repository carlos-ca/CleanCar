<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function suma($a,$b){
        
        $sumar=$a+$b;
        return response()->json(array('r'=>$sumar));

    }
    public function restar($a,$b){
        
        $resta=$a-$b;
        return response()->json(array('r'=>$resta));

    }
    public function multiplicasion($a,$b){
        
        $multi=$a*$b;
        return response()->json(array('r'=>$multi));

    }
    public function divicio($a,$b){
        
        $divi=$a/$b;
        return response()->json(array('r'=>$divi));

    }
}
