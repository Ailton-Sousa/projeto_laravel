<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/modelo', function () {
    $nome = "Mateus";  
    $idade = 15;

    return view('modelo',
    ['nome' => $nome,
    'idade' => $idade]);
});

Route::get('/exercicio00', function () {
    $data = date("d/m/y");
    $hora = date('H:i:s'); 

    
    return view('exercicio00',
    [
      'data' => $data,
      'hora'=> $hora
    ]);
});

