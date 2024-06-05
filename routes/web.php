<?php

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;

/**
 * ROTAS PÚBLICAS
 */

//Rota interceptada pelo Middleware LogAcesso
Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

//Rota que pega as informações da request da página de contatos e persiste no banco
Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

//Rota de login
Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@autenticar')->name('site.login');

/**
 * ROTAS PROTEGIDAS
 */
Route::middleware('autenticacao')->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/sair', 'LoginController@sair')->name('app.sair');
    Route::get('/cliente', 'ClienteController@index')->name('app.cliente');

    Route::get('/fornecedor', 'FornecedorController@index')->name('app.fornecedor');
    Route::post('/fornecedor/listar', 'FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', 'FornecedorController@listar')->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', 'FornecedorController@adicionar')->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', 'FornecedorController@editar')->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', 'FornecedorController@excluir')->name('app.fornecedor.excluir');

    Route::resource('/produto', 'ProdutoController');
});
