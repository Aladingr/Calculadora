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

            switch ($operador) {
                case '+':
                    $result = self::suma($num1,$num2);
                    break;

                case '-':
                    $result = self::resta($num1,$num2);
                    break;
                        
                case '*':
                    $result = self::mult($num1,$num2);
                    break;
                case '/':
                    $result = self::div($num1,$num2);
                    break;

                case '√':
                    $result = self::raiz($num1,$num2);
                    break;

                default:
                    # code...
                    break;
            }
            
                    
       return view('calcular', ['resultado' => $result ]);
       
    }
    public static function suma($num1,$num2){
        $resultado= $num1+$num2;
        return $resultado;

    }

    public static function resta($num1,$num2){
        $resultado= $num1-$num2;
        return $resultado;

    }

    public static function mult($num1,$num2){
        $resultado= $num1*$num2;
        return $resultado;

    }

    public static function div($num1,$num2){
        $resultado= $num1/$num2;
        return $resultado;

    }

    public static function raiz($num1,$num2){
        $resultado= pow($num1,(1/$num2));
        return $resultado;

    }
    
}
