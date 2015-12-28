<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $data['image'] = Session::get('img');
        $data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
		return view('home', compact('data'));
	}

    public function store()
    {
        if(Input::hasFile('image')){
            $image = Input::file('image');
            $name_image = $image->getClientOriginalName();
            $image->move('images', $name_image);

            $image_final = 'images/'. $name_image;

            $int_image = Image::make($image_final);
            $int_image->resize(600, null, function($constraint){
                $constraint->aspectRatio();
            });

            $int_image->save($image_final);
            Session::put('modal', 'true');
        }else{
            $image_final = Input::get('img_backup');
        }

        Session::put('img', $image_final);
        return Redirect::route('home');
    }
    public function crop()
    {
        Session::forget('modal');
        $img = Session::get('img');

        $int_img = Image::make('img');
        $int_img-crop(intval(Input::get('w')), intval(Input::get('h')),intval(Input::get('x')), intval(Input::get('y')));
        $int_img->fit(325);

        $int_img->save($img);
        return Redirect::route('home');
    }

}
