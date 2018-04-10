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

Route::get('/', 'FrontendController@index');
Route::get('/services/{slug?}', 'FrontendController@getServicePage');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/upload', 'PhotoController@upload')->name('upload');



Route::resource('menus', 'MenuController');

Route::resource('pages', 'PageController');


Route::resource('categories', 'CategoryController');

Route::resource('photos', 'PhotoController');