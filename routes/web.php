<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/changePassword', 'HomeController@showChangePasswordForm');
Route::post('/changePassword', 'HomeController@changePassword')->name('changePassword');


Route::resource('contatos', 'ContatosController');
Route::get('/contatos/action/search', 'ContatosController@action')->name('contatos.action');
Route::get('/contatos/action/order', 'ContatosController@action')->name('contatos.order');

Route::get('/importacao', 'ImportacaoController@importacao')->name('importacao');
Route::get('/importacao/vexpenses', 'ImportacaoController@importacaoVExpenses')->name('importacao.vexpenses');
Route::post('importacao/vexpenses/postContatos', 'ImportacaoController@postContatos')->name('importacao.postContatos')
?>

