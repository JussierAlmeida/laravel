<?php

use Illuminate\Support\Facades\Route;

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
    $nome = "jussier";
    $idade = 34;
    $arr = [10,20,30,40,50];

    return view('welcome',
    ['nome' =>$nome,
    'idade' =>$idade,
    'profissao' => "programador",
    'arr' => $arr
    
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});