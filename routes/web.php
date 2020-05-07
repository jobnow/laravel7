<?php

use Illuminate\Support\Facades\Route;

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s) {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts de categoria: {$flag}";
});

Route::get('/categorias/{flag}', function ($prm1) {
    return "Produtos da categoria: {$prm1}";
});

Route::match('post', 'get', function () {
    return "Match";
});

Route::any('/any', function () {
    return "Any";
});

Route::post('/register', function () {
    return '';
});


Route::get('/', function () {
    return view('welcome');
});
