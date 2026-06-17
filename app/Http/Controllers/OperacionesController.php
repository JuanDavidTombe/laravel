<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suma;
use App\Models\Resta;
use App\Models\Multiplicacion;
use App\Models\Division;
use App\Models\AreaCirculo;
use App\Models\AreaTriangulo;
use App\Models\Factorial;
use App\Models\FormulaCuadratica;
use App\Models\NumerosAmigos;
use App\Models\Primo;
class OperacionesController extends Controller{
    public function frm_sumar(){

        return view('frm_sumar');

    }
    public function sumar(Request $request){

    $numero1=$request->numero1;
    $numero2=$request->numero2;

    $resultado=$numero1+$numero2;
    \App\Models\Suma::create([
        'numero1' => $numero1,
        'numero2' => $numero2,
        'resultado' => $resultado
    ]);

    return $resultado;
}
//RESTAR//
    public function frm_restar(){
        return view('frm_restar');
}
    public function restar(Request $request){
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $resultado = $numero1-$numero2;
        \App\Models\Resta::create([
        'numero1' => $numero1,
        'numero2' => $numero2,
        'resultado' => $resultado
    ]);

    return $resultado;
}
//MULTIPLICAR//
    public function frm_multiplicar(){
        return view('frm_multiplicar');
}
    public function multiplicar(Request $request){
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $resultado = $numero1 * $numero2;
        \App\Models\Multiplicacion::create([
            'numero1' => $numero1,
            'numero2' => $numero2,
            'resultado' => $resultado
        ]);
        return $resultado;
}
//DIVIDIR//
    public function frm_dividir(){
        return view('frm_dividir');
    }
    public function dividir(Request $request){
        $numero1 = $request->numero1;
        $numero2 = $request->numero2;
        $resultado = $numero1 / $numero2;
        \App\Models\Division::create([
            'numero1' => $numero1,
            'numero2' => $numero2,
            'resultado' => $resultado
        ]);
        return $resultado;
}
//FORMULA CUADRATICA//
    public function frm_formulaCuadratica(){

        return view('frm_formulaCuadratica');

    }
    public function formulaCuadratica(Request $request){

    $numero1 = $request->numero1;
    $numero2 = $request->numero2;
    $numero3 = $request->numero3;

    if (!is_numeric($numero1) || !is_numeric($numero2) || !is_numeric($numero3) || $numero1 == 0) {
        return "Error: Los parámetros de la URL deben ser números y 'a' no puede ser cero.";
    }

    $numero1 = floatval($numero1);
    $numero2 = floatval($numero2);
    $numero3 = floatval($numero3);

    $discriminante = ($numero2 ** 2) - (4 * $numero1 * $numero3);

    if ($discriminante > 0) {
        $x1 = (-$numero2 + sqrt($discriminante)) / (2 * $numero1);
        $x2 = (-$numero2 - sqrt($discriminante)) / (2 * $numero1);
        \App\Models\FormulaCuadratica::create([
            'numero1' => $numero1,
            'numero2' => $numero2,
            'numero3' => $numero3,
            'x1'      => (string)$x1,
            'x2'      => (string)$x2
        ]);

        return "Operación: ({$numero1})x² + ({$numero2})x + ({$numero3}) = 0 | Respuestas: x1 = {$x1} , x2 = {$x2}";
    }

    if ($discriminante == 0) {
        $x = -$numero2 / (2 * $numero1);
        \App\Models\FormulaCuadratica::create([
            'numero1' => $numero1,
            'numero2' => $numero2,
            'numero3' => $numero3,
            'x1'      => (string)$x,
            'x2'      => (string)$x
        ]);

        return "Operación: ({$numero1})x² + ({$numero2})x + ({$numero3}) = 0 | Respuestas: x1 = {$x} , x2 = {$x}";
    }
    \App\Models\FormulaCuadratica::create([
        'numero1' => $numero1,
        'numero2' => $numero2,
        'numero3' => $numero3,
        'x1'      => 'Sin solución real',
        'x2'      => 'Sin solución real'
    ]);

    return "Operación: ({$numero1})x² + ({$numero2})x + ({$numero3}) = 0 | Error: La ecuación no tiene soluciones reales.";
}
//AREA DE UN TRIANGULO//
    public function frm_calcularAreaTriangulo(){
        return view('frm_calcularAreaTriangulo');
    }
    public function calcularAreaTriangulo(Request $request){
    $base = $request->base;
    $altura = $request->altura;

    if ($base <= 0 || $altura <= 0) {
        return "Las medidas deben ser mayores a cero.";
    }
    $resultado = ($base * $altura) / 2;
    \App\Models\AreaTriangulo::create([
        'base'      => $base,
        'altura'    => $altura,
        'resultado' => $resultado
    ]);

    return "el area del triangulo es: ".$resultado;
}
//AREA DE UN CIRCULO//
    public function frm_calcularAreaCirculo(){
        return view('frm_calcularAreaCirculo');
    }
    public function calcularAreaCirculo(Request $request){
        $radio = $request->radio;
        if ($radio <= 0) {
            return "El radio debe ser mayor a cero.";
        }
        $resultado = pi() * ($radio ** 2);
        \App\Models\AreaCirculo::create([
            'radio' => $radio,
            'resultado' => $resultado
        ]);
        return "el area del circulo es: ".$resultado;
    }
//FACTORIAL//
    public function frm_calcularFactorial(){
        return view('frm_calcularFactorial');
    }
    public function calcularFactorial(Request $request){
    $numero = $request->numero;
    if ($numero < 0) return null;

    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    \App\Models\Factorial::create([
        'numero' => $numero,
        'resultado' => $factorial
    ]);

    return $factorial;
}
//NUMERO PRIMO//
    public function frm_verificarPrimo(){
        return view('frm_verificarPrimo');
    }
    public function verificarPrimo(Request $request) {
    $numero = $request->numero;
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
    \App\Models\Primo::create([
        'numero'   => $numero,
        'es_primo' => $esPrimo
    ]);
    return $esPrimo
        ? "Número: $numero | Respuesta: Es primo"
        : "Número: $numero | Respuesta: NO es primo";
}
//NUMEROS AMIGOS//
    Public function frm_numerosAmigos(){
        return view('frm_numerosAmigos');
    }
    public function numerosAmigos(Request $request){
    if (!$request->has(['num1', 'num2'])) {
        return "Error: No se recibieron los números.";
    }

    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    $sumaDivisoresNum1 = 0;

    for ($i = 1; $i < $num1; $i++){
        if($num1 % $i == 0){
            $sumaDivisoresNum1 += $i;
        }
    }

    $sumaDivisoresNum2 = 0;

    for ($j = 1; $j < $num2; $j++){
        if($num2 % $j == 0){
            $sumaDivisoresNum2 += $j;
        }
    }

    if($sumaDivisoresNum1 === (int)$num2 && $sumaDivisoresNum2 === (int)$num1){
        \App\Models\NumerosAmigos::create([
            'numero1'    => $num1,
            'numero2'    => $num2,
            'son_amigos' => true
        ]);

        return "Los números {$num1} y {$num2} son amigos";
    } else {

        \App\Models\NumerosAmigos::create([
            'numero1'    => $num1,
            'numero2'    => $num2,
            'son_amigos' => false
        ]);

        return "Los números {$num1} y {$num2} no son amigos";
    }
}

} 
