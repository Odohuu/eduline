<?php namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\School;
use App\Country;

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
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$schools= School::orderBy('rank')->limit('3')->get();
		$news = Category::findOrFail(1)->articles()->latest('created_at')->limit('3')->get();
		// dd($news);
		$students = Category::findOrFail(5)->articles()->latest('published_at')->published()->limit('3')->orderBy('created_at')->get();
		$videos = Category::findOrFail(6)->articles()->latest('published_at')->limit('3')->orderBy('created_at')->get();

		return view('welcome', compact('news', 'students', 'videos', 'schools'));
	}


    public function editor()
    {
        return view('pages/editor');
    }
}