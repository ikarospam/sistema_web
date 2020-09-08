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

/*Route::get('/', function () {
    return view('sistema.sesion');
});*/

Route::get('/sesion', function () {
    return view('sistema.sesion');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@index')->name('index');;


Route::get('/sistema/inicio', 'PanelController@penel')->name('inicio');
Route::get('/sistema/cliente/nuevo_cliente', 'ClientesController@nuevo')->name('nuevo.cliente');
Route::get('/sistema/cliente/lista_cliente', 'ClientesController@lista')->name('lista.cliente');

//Inmuebles

Route::get('/sistema/inmueble/lista_inmueble', 'InmubleController@lista')->name('lista.inmueble');
