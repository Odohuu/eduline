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
//Route::get('/', function()
//{
//    $img = Image::make(file_get_contents('http://1x.com/images/user/e38ee9fae5b63bdcb12b15cc2529c92e-hd2.jpg'));
//    $filename = 'zaan';
//    $path = public_path() .'/images/';
//
//    $img->save("$path $filename .jpg", 100)
//        ->crop(300, 300)
//        ->save($path  . $filename . '-300x300' . '.jpg');
//
//    // create response and add encoded image data
//    $response = Response::make($img);
//
//    // set content-type
//    $response->header('Content-Type', 'image/png');
//
//    // output
//    return $response;
//});
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

Route::get('about', 'PagesController@about');
Route::get('contact','PagesController@contact');
Route::get('country','PagesController@country');

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