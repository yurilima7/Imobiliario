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
Route::get('/home/conectado/{idLocador}/{idUsuario}', 'App\Http\Controllers\ImovelController@homeConnected')->name('home_locador');
Route::get('/home/loc/{idLocatario}/{idUsuario}', 'App\Http\Controllers\ImovelController@homeLoc')->name('home_locatario');

// Registrar Usuário
Route::post('/home/inserir', 'App\Http\Controllers\UserController@insertUser')->name('inserir_usuario');
Route::get('/register/{idUsuario}', 'App\Http\Controllers\UserController@register')->name('inserir_demais_dados');
Route::post('/register/{idUsuario}', 'App\Http\Controllers\UserController@insertData')->name('inserir_dados');
Route::post('/home/login', 'App\Http\Controllers\UserController@login')->name('login');

// Descrição do Imóvel
Route::get('/descricao/{idImovel}', 'App\Http\Controllers\ImovelController@showImovel')->name('descricao');
Route::get('/descricao/conectado/{idImovel}/{idLocatario}/{idUsuario}', 'App\Http\Controllers\ImovelController@showImovelConnected')->name('descricao_conectado');

// Dados do Locador
Route::get('/locador/{idLocador}/{idUsuario}', 'App\Http\Controllers\ImovelController@showImovelLocador')->name('locador');
// Dados do Locatário
Route::get('/locatario/{idLocatario}/{idUsuario}', 'App\Http\Controllers\ImovelController@showImovelLocatario')->name('locatario');

// Registrar Imóvel
Route::get('/registrarImovel/{idUsuario}/{idLocador}', 'App\Http\Controllers\ImovelController@createImovel')->name('registrar_imovel');
Route::post('/registrarImovel/{idUsuario}/{idLocador}', 'App\Http\Controllers\ImovelController@registerImovel')->name('registrar');

// Update Imóvel
Route::get('/atualizarImovel/{idUsuario}/{idLocador}/{idImovel}', 'App\Http\Controllers\ImovelController@updateHouse')->name('atualizar_imovel');
Route::post('/atualizarImovel/{idUsuario}/{idLocador}/{idImovel}', 'App\Http\Controllers\ImovelController@updateImovel')->name('atualizar');

// Deletar Imóvel
Route::post('/deletarImovel/{idUsuario}/{idLocador}/{idImovel}', 'App\Http\Controllers\ImovelController@removeImovel')->name('deletar');

// Alugar Imóvel
Route::post('/alugarImovel/{idLocatario}/{idUsuario}', 'App\Http\Controllers\ImovelController@alugaImovel')->name('alugar');
Route::get('/atualizarAluguel/{idUsuario}/{idLocatario}/{idImovel}', 'App\Http\Controllers\ImovelController@updateHouseAluguel')->name('edita_aluguel');
Route::post('/atualizarAluguel/{idUsuario}/{idLocatario}/{idImovel}', 'App\Http\Controllers\ImovelController@updateAluguel')->name('desocupar');
