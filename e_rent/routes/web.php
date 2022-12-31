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

Route::get('/', function () {
    return view('welcome');
});

// Home
Route::get('/home', 'App\Http\Controllers\ImovelController@home')->name('listagem');
Route::get('/home/teste', 'App\Http\Controllers\ImovelController@indexImoveis');
Route::get('/home/conectado/{idUsuario}', 'App\Http\Controllers\ImovelController@homeConnected')->name('home_locador');

// Registrar Usuário
Route::post('/home/inserir', 'App\Http\Controllers\UserController@insertUser')->name('inserir_usuario');
Route::get('/register/{idUsuario}', 'App\Http\Controllers\UserController@register')->name('inserir_demais_dados');
Route::post('/register/{idUsuario}', 'App\Http\Controllers\UserController@insertData')->name('inserir_dados');
Route::post('/home/login', 'App\Http\Controllers\UserController@login')->name('login');

// Descrição do Imóvel
Route::get('/descricao/{idImovel}', 'App\Http\Controllers\ImovelController@showImovel')->name('descricao');
Route::get('/descricao/conectado/{idImovel}', 'App\Http\Controllers\ImovelController@showImovelConnected')->name('descricao_conectado');
