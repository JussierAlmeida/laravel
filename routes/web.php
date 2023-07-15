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

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\sobreNosController::class,'sobreNos'])->name('site.sobreNos');
Route::get('/contato',[\App\Http\Controllers\contatoController::class,'contato'])->name('site.contato');
Route::get('/login',[\App\Http\Controllers\loginController::class,'login'])->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/fornecedores',[\App\Http\Controllers\fornecedoresController::class,'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos',[\App\Http\Controllers\produtosController::class,'produtos'])->name('app.produtos');
    Route::get('/cliente',[\App\Http\Controllers\clienteController::class,'cliente'])->name('app.clientes');
});

Route::get('/rota1', function(){
    echo('Rota - 1');
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

//Route::redirect('/rota2','rota1');


/*Route::get('/rota2', function(){
    echo('Rota - 2');
})->name('site.rota2');
*/


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