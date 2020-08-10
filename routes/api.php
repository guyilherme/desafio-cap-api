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

Route::middleware('auth:api')->group(function () {
    Route::get('user', 'UserController@index');
    Route::get('user/{id}', 'UserController@show');

    Route::get('conta', 'ContaController@index');
    Route::get('conta/{id}', 'ContaController@show');
    Route::put('conta/deposito/{id}', 'ContaController@deposito');
    Route::put('conta/saque/{id}', 'ContaController@saque');
});