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

/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/work', 'HomeController@work')->name('work');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('/product', 'HomeController@product')->name('product');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/design-request', 'DashboardController@designRequest')->name('design-request');
Route::post('/design-request', 'DashboardController@submitRequest')->name('design-request-post');



