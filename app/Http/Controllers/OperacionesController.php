<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function sumar($num1, $num2){
        $resultado = $num1 + $num2;
        return "el resultado de la suma es: ".$resultado;
}
    public function restar($num1, $num2){
        $resultado = $num1 - $num2;
        return "el resultado de la resta es: ".$resultado;
}
    public function multiplicar($num1, $num2){
        $resultado = $num1 * $num2;
        return "el resultado de la multiplicación es: ".$resultado;
}
    public function dividir($num1, $num2){
        $resultado = $num1 / $num2;
        return "el resultado de la división es: ".$resultado;
}
    public function formulaCuadratica($a, $b, $c){

        if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c) || $a == 0) {
            return "Error: Los parámetros de la URL deben ser números y 'a' no puede ser cero.";
        }

        $a = floatval($a);
        $b = floatval($b);
        $c = floatval($c);

        $discriminante = ($b ** 2) - (4 * $a * $c);

        if ($discriminante > 0) {
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

            return "Operación: ({$a})x² + ({$b})x + ({$c}) = 0 | Respuestas: x1 = {$x1} , x2 = {$x2}";
        } 
        
 
        if ($discriminante == 0) {
            $x = -$b / (2 * $a);

            return "Operación: ({$a})x² + ({$b})x + ({$c}) = 0 | Respuestas: x1 = {$x} , x2 = {$x}";
        }

  
        return "Operación: ({$a})x² + ({$b})x + ({$c}) = 0 | Error: La ecuación no tiene soluciones reales.";
}
    public function calcularAreaTriangulo($base, $altura) {
    if ($base <= 0 || $altura <= 0) {
        return "Las medidas deben ser mayores a cero.";
    }
    $resultado = ($base * $altura) / 2;
    return "el area del triangulo es: ".$resultado;
}
    public function caulcularCirculo($radio) {
    if ($radio <= 0) {
        return "El radio debe ser mayor a cero.";
    }
    $resultado = pi() * ($radio ** 2);
    return "el area del circulo es: ".$resultado;
} 
    public function calcularFactorial($numero) {
    if ($numero < 0) return null; 
    
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    
    return "el factorial de ".$numero." es: ".$factorial;

    }
     public function verificarPrimo($numero)
    {
        $esPrimo = true;

        if ($numero <= 1) {
            $esPrimo = false;
        } else {
            for ($i = 2; $i < $numero; $i++) {
                if ($numero % $i === 0) {
                    $esPrimo = false;
                    break;
                }
            }
        }
        return $esPrimo 
            ? "Número: $numero | Respuesta: Es primo" 
            : "Número: $numero | Respuesta: NO es primo";
}
    public function numerosAmigos($num1, $num2) {
        $sumaDivisoresNum1 = 0;
        for($i = 1; $i < $num1; $i++){
            if($num1 % $i == 0){
                $sumaDivisoresNum1 += $i;
            }
        }
        $sumaDivisoresNum2 = 0;
        for($j = 1; $j < $num2; $j++){
            if($num2 % $j == 0){
                $sumaDivisoresNum2 += $j;
            }
        }
        if($sumaDivisoresNum1 == $num2 && $sumaDivisoresNum2 == $num1){
            return "los números ".$num1." y ".$num2." son amigos";
        } else {
            return "los números ".$num1." y ".$num2." no son amigos";
        }
    }
}
