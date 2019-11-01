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


Route::get('/insert', 'StorageController@insert');
Route::get('/delete/{id}', 'StorageController@delete');
Route::get('/up/{id}', 'StorageController@update');
Route::get('/show/{id}', 'StorageController@show');

/*
Route::get('/adduser', 'UserController@getAddUserForm');
Route::post('/insert', ['as' => 'insert','uses' => 'UserController@insertAction']);
*/
