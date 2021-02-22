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

Auth::routes();

//Auth::routes();
Route::group(['middleware'=>'admin'],function(){
	Route::get('/admin', 'HomeController@llegadas')->name('admin');
    Route::get('/inad', 'HomeController@inadmitidos')->name('inad');
    Route::get('/inadIcts', 'HomeController@inadIcts')->name('inadIcts');
    Route::get('/llegadas', 'HomeController@llegadasVu')->name('llegadas');
    Route::get('/salidas', 'HomeController@salidasVu')->name('salidas');
});
Route::group(['middleware'=>'icts'],function(){
	Route::get('/icts', 'HomeController@icts')->name('icts');
});

Route::get('/home', 'HomeController@indexes')->name('home');
