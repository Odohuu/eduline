<?php namespace App\Http\Controllers;

use App\Album;
use App\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class ImagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
 
		return view('zurag.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$album_names = Album::lists('name', 'id');

		return view('zurag.create', compact('album_names'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		
		$file = Input::file('image');

	    $random_name = str_random(8);
	    $path = public_path('images/photos/');

	    $extension = $file->getClientOriginalExtension();
	    $filename=$random_name.'-'.$extension;

	    $uploadSuccess = Input::file('image')->move($path, $filename);

	    Image::create(array('description' =>$input['description'] , 'image' => $filename, 'album_id'=>$input['album_id'] ));


	    return redirect('albums'); //array('id'=>Input::get('album_id'))
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
