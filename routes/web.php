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

Route::get('/','AdminController@index');
Route::get('input','InputController@index');
//Route::get('multiple-insert','AdminController@multipleInsert');
Route::post('multiple-row','AdminController@multipleRow')->name('multiple_row');
Route::post('multiple-score','InputController@multipleScore')->name('multiple_score');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
