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

Route::get('/', 'HomeController@index')
->name('homepage');

Route::get('/products', 'ProductController@products')->name('productpage');

Route::get('/detail/{id}', 'ProductController@show')
->name('detailpage');

Route::get('/contacts', 'HomeController@contacts')
->name('contactpage');
