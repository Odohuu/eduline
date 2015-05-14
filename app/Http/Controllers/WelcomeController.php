<?php namespace App\Http\Controllers;

use App\Article;

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
        $news = Article::latest('published_at')->published()->limit('3')->orderBy('created_at')->get();
        $students = Article::latest('published_at')->published()->limit('3')->orderBy('created_at')->get();
//        , compact('articles')
		return view('welcome', compact('news', 'students'));
	}


    public function editor()
    {
        return view('pages/editor');
    }
}
