<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'WelcomeController@index');
Route::get('lessons','WelcomeController@lessons');

Route::get('home', 'HomeController@index');

// Route::get('about', 'PagesController@about');
Route::get('contact','PagesController@contact');
// Route::get('country','PagesController@country');

Route::resource('categories', 'CategoriesController');
Route::resource('articles', 'ArticlesController');
Route::get('allArticles', 'ArticlesController@all');
Route::resource('items', 'ItemsController');
Route::get('allItems', 'ItemsController@all');

Route::resource('photos', 'PhotosController');
Route::get('thumbnail', 'PhotosController@thumbnail');
Route::resource('schools', 'SchoolsController');
Route::resource('countries', 'CountriesController');

Route::resource('albums', 'AlbumsController');
Route::get('allAlbums', 'AlbumsController@all');

Route::resource('settings', 'SettingsController');
Route::get('editor','WelcomeController@editor');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';
}]);