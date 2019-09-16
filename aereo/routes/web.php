<?php


Route::get('admin','admin\AdminController@index')->name('admin.home');
Route::get('/','site\SiteController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lista','ClienteController@lista')->name('cliente.lista');
//rotas para formularios de cadastros
Route::get('FrmCad', 'FrmCadController@cadastrar');
Route::get('FrmCadReserva', 'FrmCadReservaController@cadastrar');
Route::get('FrmCadAviao', 'FrmCadAviaoController@cadastrar');
Route::get('FrmCadVoo', 'FrmCadVooController@cadastrar');

Auth::routes ();



