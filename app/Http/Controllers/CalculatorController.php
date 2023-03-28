<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function procesarDatos(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operador = $request->input('operator');
        $resultado = "";
        $result ="";

            if($operador=='+'){
              $result = self::suma($num1,$num2);

            } /*elseif($operador=='-'){
                $resultado= $num1-$num2;

            } elseif($operador=='*'){
                $resultado= $num1*$num2;

            } elseif($operador=='/'){
                $resultado= $num1/$num2;
           
            } elseif($operador=='nraiz'){
                $resultado= pow($num1,(1/$num2));

            }*/
                    
       return view('calcular', ['resultado' => $result ]);
       
    }
    public static function suma($num1,$num2){
        $resultado= $num1+$num2;
        return $resultado;

    }
    
}
