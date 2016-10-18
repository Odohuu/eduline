<?php namespace App\Http\Controllers;

use App\Album;
use App\Country;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AlbumsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albums = Album::latest('created_at')->paginate(6);
    	
		return view('albums.index', compact('albums'));
	}

	public function all()
    {
        $albums = Album::where('country_id', '<', 6)->latest('created_at')->paginate(8);

        return view('albums.all', compact('albums'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$countries = Country::lists('name','id');

		return view('albums.create', compact('countries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// $input = Input::all();
		$file = $request->file('cover_image');
		// $file = $input['cover_image'];
    	$path = public_path('images/photos/');
		
		if ($file->isValid()) {
			
			$filename=str_random(5).'-cover-'.$file->getClientOriginalName();
	
			$image = Image::make($file);
			$image->resize(480, 316);
			$image->save($path.$filename, 90); 

			Album::create(array('country_id' => $request->input('country_id'),'name' => $request->input('name') , 'description' => $request->input('description'), 'cover_image' => $filename ));
		}
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
		$album = Album::findOrFail($id);

		return view('albums.show',compact('album'));
	}
    
    public function album($id)
	{
		$album = Album::findOrFail($id);

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
		$countries = Country::lists('name','id');

		$album = Album::findOrFail($id);

		return view('albums.edit',compact('album','countries'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, AlbumRequest $request)
	{
        $album = Album::findOrFail($id);

        $album->update($request->all());

        return redirect('albums');
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
