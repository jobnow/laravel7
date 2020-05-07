<?php

use Illuminate\Support\Facades\Route;

//rota que redireciona para um nome de url ou view
Route::get('/redirect3', function () {
    return redirect()->route('url.name');
});

//redireciona para view
//route('url.name');

//rota para onde e redirecionado por nome
Route::get('/nome-url', function () {
    return "Hey hey hey";
})->name('url.name');

//Rota de redirect maneira simplificada 
Route::get('/view', 'welcome', ['id' => 'teste']);


//Rota de redirect forma 1
Route::get('/redirect2', function () {
    return "Redirect 02";
});

//Rota que busca produtos/id e retorna o id do produto abaixo, se nao houver id
//mostra somente os "Produto(s)
Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s) {$idProduct}";
});

//Rota mostra categoria/nome/posts e coloca o nome apos o :
Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts de categoria: {$flag}";
});

//Rota mostra nome após categoria e coloca após o :
Route::get('/categorias/{flag}', function ($prm1) {
    return "Produtos da categoria: {$prm1}";
});

//Rota match vc escolhe os tipos de rotas
Route::match('post', 'get', function () {
    return "Match";
});

//Rota any da todos os tipos de parametros
Route::any('/any', function () {
    return "Any";
});

//Rota post para registrar 
Route::post('/register', function () {
    return '';
});

//Rota get padrão
Route::get('/', function () {
    return view('welcome');
});
