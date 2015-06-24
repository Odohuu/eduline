<?php namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\AlbumRequest;

class AlbumsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albums = Album::with('Photos')->get();
    	
		return view('albums.index', compact('albums'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('albums.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AlbumsRequest $request)
	{
		Category::create($request->all());
		
		$file = Input::file('cover_image');
   		$random_name = str_random(8);
    	$destinationPath = 'albums/';
    	$extension = $file->getClientOriginalExtension();
    	$filename=$random_name.'_cover.'.$extension;
    	$uploadSuccess = Input::file('cover_image')->move($destinationPath, $filename);
	    $album = Album::create(array(
	      'name' => Input::get('name'),
	      'description' => Input::get('description'),
	      'cover_image' => $filename,
	    ));


		return redirect('albums');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$album = Album::with('Photos')->findOrFail($id);
		return view('albums.show',compact('album'));
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
		$album = Album::findOrFail($id);
		$album->delete();

		return redirect('albums');
	}

}
