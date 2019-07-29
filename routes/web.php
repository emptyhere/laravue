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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user','TaskController@index');


Route::group(['prefix' => '/contacts', 'middleware' => 'auth'], function() {
    Route::get('/', 'ContactController@index')->name('contact.index');
    Route::get('/create', 'ContactController@create')->name('contact.create');
    Route::post('/create', 'ContactController@store')->name('contact.store');
    Route::get('/{id}/edit', 'ContactController@edit')->name('contact.edit');
    Route::post('/{id}/store', 'ContactController@update')->name('contact.update');
    Route::get('/{id}', 'ContactController@show')->name('contact.show');
    Route::post('/{id}/delete', 'ContactController@destroy')->name('contact.destroy');
});
