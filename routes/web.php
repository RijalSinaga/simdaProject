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
    return view('welcome');
});

Route::get('/rekening1', 'Rekening1Controller@index');
Route::post('/rekening1/create', 'rekening1Controller@create');
Route::get('/rekening1/{id}/edit', 'rekening1Controller@edit');
Route::post('/rekening1/{id}/update', 'rekening1Controller@update');
Route::get('/rekening1/{id}/delete', 'rekening1Controller@delete');

// Route::Resource('/rekening1','Rekening1Controller');

