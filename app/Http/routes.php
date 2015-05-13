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

Route::get('home', 'HomeController@index');

//Route::post('home',[
//    'as' => 'postImage',
//    'uses' => 'HomeController@store'
//]);
//Route::post('home/crop', [
//    'as' => 'cropImage',
//    'uses' => 'HomeController@crop'
//]);
//Pages
Route::get('about', 'PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('school','PagesController@school');
Route::get('usa','PagesController@usa');

Route::resource('categories', 'CategoriesController');

Route::resource('articles', 'ArticlesController');
Route::resource('photos', 'PhotosController');
//Route::get('home', 'HomeController@index');

Route::get('editor','WelcomeController@editor');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';
}]);
//Route::get('img/{folder}/{path}', function(League\Glide\Server $server, Illuminate\Http\Request $request){
//    $server->outputImage($request);
//})->where('path','.+');