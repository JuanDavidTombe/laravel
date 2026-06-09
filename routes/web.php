<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludosController;
use App\Http\Controllers\OperacionesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/saludo', [SaludosController::class, 'index']);
Route::get('/sumar/{num1}/{num2}',[OperacionesController::class,'sumar']);
Route::get('/restar/{num1}/{num2}',[OperacionesController::class,'restar']);
Route::get('/multiplicar/{num1}/{num2}', [OperacionesController::class, 'multiplicar']);
Route::get('/dividir/{num1}/{num2}', [OperacionesController::class, 'dividir']);
Route::get('/formulaCuadratica/{num1}/{num2}/{num3}', [OperacionesController::class, 'formulaCuadratica']);
Route::get('/calcularAreaTriangulo/{base}/{altura}', [OperacionesController::class, 'calcularAreaTriangulo']);
Route::get('/calcularCirculo/{radio}', [OperacionesController::class, 'caulcularCirculo']);
Route::get('/calcularFactorial/{numero}', [OperacionesController::class, 'calcularFactorial']);
Route::get('/verificarPrimo/{numero}', [OperacionesController::class, 'verificarPrimo']);
Route::get('/numerosAmigos/{num1}/{num2}', [OperacionesController::class, 'numerosAmigos']);