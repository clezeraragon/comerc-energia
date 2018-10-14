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
});
Route::get('email', 'EmailController@sendEmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gestao-numero', 'GestaoDeNumeroController@index')->name('gestao.numero');
Route::get('/gestao-create','GestaoDeNumeroController@create')->name('gestao.create');
Route::get('/data-ajax-grid','GestaoDeNumeroController@datatablesAjax')->name('gestao.ajax.grid');
Route::get('/gestao-edit/{id}','GestaoDeNumeroController@edit')->name('gestao.edit');
Route::get('/gestao-delete/{id}','GestaoDeNumeroController@delete')->name('gestao.delete');
Route::post('/gestao-store','GestaoDeNumeroController@store')->name('gestao.store');
Route::post('/gestao-update/{id}','GestaoDeNumeroController@update')->name('gestao.update');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


