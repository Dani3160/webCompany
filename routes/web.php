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
    return redirect()->route('home', 'id');
});

Route::get('/{param}', 'FE\HomeController@index')->name('home');
Route::get('/{param}/about', 'FE\AboutController@index')->name('about');
Route::get('/{param}/service', 'FE\ServiceController@index')->name('service');
Route::get('/{param}/news', 'FE\NewsController@index')->name('news');
Route::get('/{param}/contact', 'FE\ContactController@index')->name('contact');
