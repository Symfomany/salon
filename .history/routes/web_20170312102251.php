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


Route::get('/fournisseurs', 'ProviderController@fournisseurs')->name('fournisseurs');

Route::get('/excel', 'ProviderController@excel')->name('excel');

Route::get('/importer', 'ProviderController@import')->name('import');

Route::post('/register', 'ProviderController@register')->name('register');

Route::get('/accord/{id}', 'ProviderController@getAccordOne')
->where('id', '[a-zA-Z0-9]{1,40}')
->name('accord');

Route::get('/providers', 'ProviderController@getAll')
->name('providers');

Route::get('/already', 'ProviderController@already')
->name('already');

Route::get('/provider/{id}', 'ProviderController@getOne')
->where('id', '[a-zA-Z]{1,40}')
->name('provider');
