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
    return view('home');
})->name('home');

Route::post('/register', 'ProviderController@register')->name('register');

Route::get('/accord/{id}', 'ProviderController@getAccordOne')
->where('id', '[a-z]{1,40}')
->name('accord');

Route::get('/providers', 'ProviderController@getAll')
->name('providers');


Route::get('/provider/{id}', 'ProviderController@getOne')
->where('id', '[a-z]{1,40}')
->name('provider');
