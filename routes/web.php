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
//Route::get('/test1', 'TestController@test1');

/*
Route::get('/insert', 'StorageController@insert');
Route::get('/delete/{id}', 'StorageController@delete');
Route::get('/up/{id}', 'StorageController@update');
Route::get('/show/{id}', 'StorageController@show');
*/


Route::get('/home', 'UserController@home_page');
Route::get('/insert', ['as' => 'insert', 'uses' => 'UserController@insert_page']);
Route::post('/insertAction', ['as' => 'insertAction','uses' => 'UserController@insertAction']);
Route::post('/edit', ['as' => 'edit','uses' => 'UserController@edit_page']);
Route::post('/editAction', ['as' => 'editAction','uses' => 'UserController@editAction']);
Route::post('/delete', ['as' => 'delete','uses' => 'UserController@delete_page']);
Route::post('/deleteAction', ['as' => 'deleteAction','uses' => 'UserController@deleteAction']);
Route::post('/show', ['as' => 'show','uses' => 'UserController@showAll_page']);

