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
/*
Route::get('/', function () {
    return 'olá, seja bem vindo ao curso de laravel!';
});*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobre-nos',[\App\Http\Controllers\sobreNosController::class,'sobreNos']);

Route::get('/contato',[\App\Http\Controllers\contatoController::class,'contato']);

Route::get('/cliente',[\App\Http\Controllers\clienteController::class,'cliente']);

Route::get('/login',[\App\Http\Controllers\loginController::class,'login']);

Route::get('/fornecedores',[\App\Http\Controllers\fornecedoresController::class,'fornecedores']);

Route::get('/produtos',[\App\Http\Controllers\produtosController::class,'produtos']);

Route::get('/cliente',[\App\Http\Controllers\clienteController::class,'cliente']);



//nome, categoria, assunto, mensagem


/*Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome ='desconhecido',
        int $categoria_id = 1 //'informação'
    ){
    echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/