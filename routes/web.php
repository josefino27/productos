<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio')->name('inicio');
Route::view('/nosotros','nosotros')->name('nosotros');
//Route::get('/productos','ProductosController@index')->name('productos');
Route::resource('/productos','ProductosController');
Route::view('/contacto','contacto')->name('contacto');
Route::post('/contacto','ContactoController@store')->name('contacto');
Route::view('/acceder','acceder')->name('acceder');


