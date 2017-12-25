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

Route::get('/',['as'=>'main_page','uses'=>'Main_Controller@index']);

Route::resource('Article', 'Article_Controller');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/refresh',['as' => 'logon','uses'=>'Main_Controller@logon']);

Route::get('rem/{id}',['as'=>'remove','uses' => 'Main_Controller@remove']);

Route::post('update/{id}',['as'=>'update','uses' => 'Main_Controller@update']);