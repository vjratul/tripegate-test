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

Route::get('all-orders','App\Http\Controllers\OrderController@index');
Route::get('highest-price','App\Http\Controllers\OrderController@highestProductPrice');
Route::get('highest-order-country','App\Http\Controllers\OrderController@highestOrderCountry');