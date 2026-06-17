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
Route::get('/frm_sumar',[OperacionesController::class,'frm_sumar']);
Route::post('/sumar',[OperacionesController::class,'sumar'])->name('sumar.store');
Route::get('/frm_restar',[OperacionesController::class,'frm_restar']);
Route::post('/restar',[OperacionesController::class,'restar'])->name('restar.store');
Route::get('/frm_multiplicar',[OperacionesController::class,'frm_multiplicar']);
Route::post('/multiplicar',[OperacionesController::class,'multiplicar'])->name('multiplicar.store');
Route::get('/frm_dividir',[OperacionesController::class,'frm_dividir']);
Route::post('/dividir',[OperacionesController::class,'dividir'])->name('dividir.store');
Route::get('/frm_formulaCuadratica',[OperacionesController::class,'frm_formulaCuadratica']);
Route::post('/formulaCuadratica',[OperacionesController::class,'formulaCuadratica'])->name('formulaCuadratica.store');
Route::get('/frm_calcularAreaTriangulo',[OperacionesController::class,'frm_calcularAreaTriangulo']);
Route::post('/calcularAreaTriangulo',[OperacionesController::class,'calcularAreaTriangulo'])->name('calcularAreaTriangulo.store');
Route::get('/frm_calcularAreaCirculo',[OperacionesController::class,'frm_calcularAreaCirculo']);
Route::post('/calcularAreaCirculo',[OperacionesController::class,'calcularAreaCirculo'])->name('calcularAreaCirculo.store');
Route::get('/frm_calcularFactorial',[OperacionesController::class,'frm_calcularFactorial']);
Route::post('/calcularFactorial',[OperacionesController::class,'calcularFactorial'])->name('calcularFactorial.store');
Route::get('/frm_verificarPrimo',[OperacionesController::class,'frm_verificarPrimo']);
Route::post('/verificarPrimo',[OperacionesController::class,'verificarPrimo'])->name('verificarPrimo.store');
Route::get('/frm_numerosAmigos', [OperacionesController::class, 'frm_numerosAmigos']);
Route::post('/numerosAmigos', [OperacionesController::class, 'numerosAmigos'])->name('numerosAmigos.store');