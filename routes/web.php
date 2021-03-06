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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/preorder', 'PreOrderController');
Route::view('/preorder-confirmation', 'preorder.confirmation')->name('preorder.confirmation');
Route::view('/terms-and-conditions', 'terms_and_conditions')->name('terms_and_conditions');
Route::view('/test', 'emails.order_confirmation')->name('test');
