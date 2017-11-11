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

Route::get('/', function () {
    return view('welcome');
	// return "<h1>Primeira lógica com laravel</h1>";
});

// Route::get('/', function() {
// 	return "<h2>Outra lógica com laravel</h2>";
// });

// Listar produtos
Route::get('/produtos', [
'as' => 'listaProd',
'uses' => 'ProdutoController@lista'
] );

// Mostrar detalhes produtos
Route::get(
	'/produtos/mostra/{id}', 
	'ProdutoController@mostra')
->where( 'id', '[0-9]+');

// Cadastra produtos
Route::get( '/produtos/novo', 'ProdutoController@novo' );

// Adcionar produtos BD
Route::post( '/produtos/adiciona', 'ProdutoController@adiciona' );

// Listar com JSON - Efeito teste
Route::get( '/produtos/json', 'ProdutoController@listaJson' );

// Remover produtos
Route::get( '/produtos/remove/{id}', 'ProdutoController@remove' );

// Alterar produtos
Route::get(
	'/produtos/altera/{id}', 
	'ProdutoController@altera')
->where( 'id', '[0-9]+');

// Update produtos
Route::post( 
'/produtos/update',
 'ProdutoController@update');
 // ->where( 'id', '[0-9]+');

// Router autenticação
Auth::routes();

// Tela Login
Route::get('/auth/login', 'HomeController@login')->name('login');

Route::get('/', 'HomeController@index')->name('welcome');