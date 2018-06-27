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
Route::get('/all-projects', 'FrontendController@projects');
// Route::get('/contacts', 'FrontendController@contacts')->name('contacts');

// Route::post('/sendmail', 'FrontendController@sendmail')->name('sendmail');
Route::match(['get','post'],'/contacts',['uses' => 'FrontendController@contacts', 'as' => 'contacts']);

// test
Route::get('testobject', 'FrontendController@test');

//objects 
Route::get('/objects/{slug}', 'FrontendController@object');







Auth::routes();
Route::get('/home', 'HomeController@index');
Route::post('/upload', 'PhotoController@upload')->name('upload');
Route::get('/projectsasd', 'ProjectController@indexFilter')->name('filter');
Route::resource('menus', 'MenuController');
Route::resource('pages', 'PageController');
Route::resource('categories', 'CategoryController');
Route::resource('photos', 'PhotoController');
Route::resource('projects', 'ProjectController');

Route::resource('boxes', 'BoxController');