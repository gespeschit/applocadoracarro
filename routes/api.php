<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::apiResource('marca','App\Http\Controllers\MarcaController');
route::apiResource('modelo','App\Http\Controllers\ModeloController');
route::apiResource('cliente','App\Http\Controllers\ClienteController');
route::apiResource('carro','App\Http\Controllers\CarroController');
route::apiResource('locacao','App\Http\Controllers\LocacaoController');
