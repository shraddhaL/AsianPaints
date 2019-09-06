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

Route::get('/','customersController@admin');

//Route::get('/customers', 'customersController@index');
Route::post('/customers', 'customersController@store');
Route::get('/customers/home', 'customersController@home');

Route::get('/customerPage', function () {
    return view('customerPage');
});

Route::get('/client', function () {
    return view('client');
});
