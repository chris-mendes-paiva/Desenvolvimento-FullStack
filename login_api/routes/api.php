<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function() {
    Route::post('registro', 'AutenticadorControlador@registro');
    Route::post('login', 'AutenticadorControlador@login');
    Route::get('registro/ativar/{id}/{token}', 
               'AutenticadorControlador@ativarregistro');
    Route::middleware('auth:api')->group(function() {
        Route::post('logout', 'AutenticadorControlador@logout');
    });
});

Route::get('produtos', 'ProdutosControlador@index')
    ->middleware('auth:api');