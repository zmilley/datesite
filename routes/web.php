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

Route::get('home', 'HomeController@index');
Route::get('mail', 'MailController@index');
Route::get('search', 'SearchController@search');
Route::get('galleries', 'GalleryController@overview');

Route::get('profile', 'UserController@profile');
Route::get('settings', 'SettingsController@index');

Route::get('profileimg', 'SettingsController@profileimg');
Route::get('profileImgs', 'SettingsController@getAllProfileImages');
Route::post('profileimg','SettingsController@updateProfileImage');



