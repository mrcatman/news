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


Auth::routes();

Route::get('/','NewsController@index')->name('news.index');
Route::get('/news/{id}', 'NewsController@show')->name('news.show');
Route::get('/category/{category}', 'NewsController@category')->name('news.category');

Route::get('/manager', 'ManagerController@index')->name('manager.index');
Route::get('/manager/create', 'ManagerController@create')->name('manager.create');
Route::post('/manager/create', 'ManagerController@store')->name('manager.store');
Route::get('/manager/edit/{id}', 'ManagerController@edit')->name('manager.edit');
Route::post('/manager/edit/{id}', 'ManagerController@update')->name('manager.update');
Route::get('/manager/destroy/{id}', 'ManagerController@destroy')->name('manager.destroy');