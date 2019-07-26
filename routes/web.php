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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/users', function () {
    return view('home');
});


Route::get('/test/{id}', 'HomeController@test');

Route::prefix('jobs')->group(function () {

    Route::get('create', 'TaskController@create');
    Route::post('create', 'TaskController@store')->name('jobs.store');

});
