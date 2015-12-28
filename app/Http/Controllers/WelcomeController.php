<?php namespace App\Http\Controllers;

use Cache;
use App\Article;
use App\Category;
use App\School;
use App\Country;
use App\Album;
use App\Item;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		//$this->middleware('auth', ['except' => ['welcome']]);
	}

	public function slide()
	{
		

		return view('welcome', compact('items'));
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$items = Item::latest('created_at')->limit( Cache::get('settings_slide_number', '') )->orderByRaw('RAND()')->get();
		$schools= School::limit('4')->orderByRaw('RAND()')->get();
		$zar_news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->get();
		$busad_news = Category::findOrFail(12)->articles()->latest('created_at')->limit('3')->get();
		$students = Category::findOrFail(5)->articles()->latest('updated_at')->published()->limit('4')->orderByRaw('RAND()')->get();
		$albums = Album::limit('3')->where('country_id', '<', 6)->orderByRaw('RAND()')->get();

		return view('welcome', compact('items','zar_news','busad_news', 'students', 'albums', 'schools'));
	}


    public function editor()
    {
        return view('pages/editor');
    }
	
    public function lessons()
    {
		$items = Item::latest('created_at')->limit( Cache::get('settings_slide_number', '') )->orderByRaw('RAND()')->get();
    	$english_albums = Album::findOrFail(24)->photos()->latest('created_at')->get();
		$korea_albums = Album::findOrFail(25)->photos()->latest('created_at')->get();
		$korea_lesson_news = Category::findOrFail(16)->articles()->latest('created_at')->limit('6')->get();
		$english_lesson_news = Category::findOrFail(14)->articles()->latest('created_at')->limit('6')->get();
    	
        return view('lessons', compact('items', 'english_albums','korea_albums','korea_lesson_news','english_lesson_news'));
    }
}