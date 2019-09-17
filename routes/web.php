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
});

// Auth Controller
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/pagination','PaginationController@index');

// Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
// Route::get('/rekening1', 'rekening1Controller@index')->middleware('auth');
// Route::post('/rekening1/create', 'rekening1Controller@create')->middleware('auth');
// Route::get('/rekening1/{id}/edit', 'rekening1Controller@edit')->middleware('auth');
// Route::post('/rekening1/{id}/update', 'rekening1Controller@update')->middleware('auth');
// Route::get('/rekening1/{id}/delete', 'rekening1Controller@delete')->middleware('auth');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index');
    //<-- ROUTE REKENING_1 -->
    Route::get('/rekening1', 'rekening1Controller@index');
    Route::post('/rekening1/create', 'rekening1Controller@create');
    Route::get('/rekening1/{id}/edit', 'rekening1Controller@edit');
    Route::post('/rekening1/{id}/update', 'rekening1Controller@update');
    Route::get('/rekening1/{id}/delete', 'rekening1Controller@delete');
    //<-- ROUTE REKENING_5 -->
    Route::get('/rekening5', 'rekening5Controller@index');
    Route::post('/rekening5/create', 'rekening5Controller@create');
    Route::get('/rekening5/{id}/edit', 'rekening5Controller@edit');
    Route::post('/rekening5/{id}/update', 'rekening5Controller@update');
    Route::get('/rekening5/{id}/delete', 'rekening5Controller@delete');
    
});