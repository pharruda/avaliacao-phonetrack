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

Route::get('/', 'UsuarioController@index')->name('home');
Route::post('cadastro/{usuario_id}', 'UsuarioController@cadastro')->name('usuario.cadastro');
Route::get('usuarios', 'UsuarioController@all')->name('usuario.all');

Route::get('cidades/{estado_id}', 'CidadeController@getCidadesPorEstado')->name('cidade.mostraPorEstados');
