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


Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');
Route::get('/login', function() {return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/clientes', function() {return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste');




Route::fallback(function(){
    echo "A rota acessada não exite clique aqui para ir para pagia inicial<a href="/">clique aqui para retornar para o inicio</a>";
});


// nome, categoria, assunto, mensagem

// Route::get('/contato/{nome?}/{categoria?}/{assusnto?}/{mensagem?}', 
// function(
//     string $nome = "Desconhecido", 
//     String $categoria = "Informação", 
//     string $assunto = 'Contato', 
//     string $mensagem = 'Mensagem não informada'
//     ){
//     echo 'Estamos aqui: '. $nome . '--' . $categoria . '--' . $assunto . '--' . $mensagem;
// });

Route::get('/contato/{nome}/{categoria_id}', 
function(
    string $nome = "Desconhecido", 
    int $categoria_id = 1 
    ) { 
        echo "Estamos aqui: $nome -- $categoria_id" ;
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');



// Route::get('/sobre-nos', function () {
//     return 'ola, seja bem vindo ao curso';
// });asffassa

// Route::get('/home', function () {
//     return 'ola, seja bem vindo ao curso';
// });