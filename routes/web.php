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

Route::get('/home', 'HomeController@admin')->middleware('admin')->name('home');

Route::group(['middleware'=>'admin'],function(){

    route::get('/admin','HomeController@homeAdmin')->name('admin');
    

});
route::get('/user','HomeController@homeUser')->name('user');
