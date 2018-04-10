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
Route::get('/services', 'FrontendController@services');
Route::get('/services/{slug}', 'FrontendController@getServicePage');
Route::get('/about', 'FrontendController@about');
Route::get('/projects', 'FrontendController@projects');
Route::get('/contacts', 'FrontendController@contacts');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/upload', 'PhotoController@upload')->name('upload');
Route::get('/projectsasd', 'ProjectController@indexFilter')->name('filter');


Route::resource('menus', 'MenuController');

Route::resource('pages', 'PageController');


Route::resource('categories', 'CategoryController');

Route::resource('photos', 'PhotoController');

Route::resource('projects', 'ProjectController');