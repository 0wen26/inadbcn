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

//Route::get('/admin', 'HomeController@administrar')->middleware('admin')->name('home');

//route::get('/user','HomeController@index')->middleware('admin')->name('user');
//route::get('/admin','HomeController@index')->name('admin');
//Auth::routes();
Route::group(['middleware'=>'admin'],function(){
	Route::get('/admin', 'HomeController@admin')->name('admin');
});
Route::group(['middleware'=>'icts'],function(){
	Route::get('/icts', 'HomeController@icts')->name('icts');
});

Route::get('/home', 'HomeController@indexes')->name('home');