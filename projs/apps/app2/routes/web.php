<?php

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

/*
Route::get('/', function () { //Rota Default do Sistema
    return view('home');
});
*/

Route::get('/', ['as'=>'site.home','uses'=>'Site\HomeController@index']);

Route::get('/login', ['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair', ['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

// Route::get('/contato/{id?}', function($id = null) { //Rota criada com parametro não obrigatório
//     return "Contato id = $id";
// });

Route::get('/contato/{id?}',['uses'=>'ContatoController@index']); //Rota para acesso em um Controller

Route::post('/contato',['uses'=>'ContatoController@criar']);

Route::put('/contato',['uses'=>'ContatoController@editar']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/cursos', ['as'=>'admin.cursos','uses'=>'Admin\CursoController@index']); //Rota com apelido para evitar problemas futuros de mexer na estrutura inteira do projeto
    Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    Route::get('/admin/cursos/_table', ['as'=>'admin.cursos.table','uses'=>'Admin\CursoController@index2']);
    Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);

    //Route::get('add-post', [CursoController::class, 'myPost']);
    Route::post('submit-post', ['as'=>'postSubmit','uses'=>'CursoController@submitPost']);
});


//Route::post('/contato', function() { //Rota criada para receber dados via POST
//    dd($_POST); //Semelhante ao var_dump o dd é mais elegante e após executar para a aplicação (Ideal para testar algo no sistema)
//    return "Contato POST";
//});

//Route::put('/contato', function() { //Put é utilizado geralmente para editar registros
//    return "Contato PUT";
//});