<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Http\Requests\PhotoRequest;

class Photoscontroller extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $photos = Photo::all();
//        $photos->latest('created_at')->get();
        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store()
    {
//        $file = Input::file('photo');
//        $extension = $file->getClientOriginalExtension();
//        $filename = time().'.'.$extension;
//
//        $upload_success = $file->move('images', $filename);
//
//        Photo::create(array('imageName' => 'images/'.$filename ));

        $input = Input::all();
        $path = public_path() .'/images/articles/';
        $fileName = $input['fileName']->getClientOriginalName();
        Photo::create(array('path' => 'http://eduline.dev/images/articles/'. '300x300-' .$fileName, 'name' => $input['name'] ));
        $image = Image::make($input['fileName']->getRealPath());
        File::exists($path) or File::makeDirectory($path);
//        $image->save(public_path().'/images/' . Auth::user()->name . '/' . $input['filename']->getClientOriginalName();
        $image->crop(300, 300)->save($path . '300x300-' . $fileName, 100);

        return Redirect('photos');
    }

    public function show($id)
    {
//        $photo = Photo::findOrFail($id);
//
//        return view('photos.show', compact('photo'));
    }

    public function edit($id)
    {
//        dd($id);
        $photo = Photo::findOrFail($id);

        return view('photos.edit', compact('photo'));
    }

    public function update($id, PhotoRequest $request)
    {
        $photo = Photo::findOrFail($id);

        $photo->update($request->all());

        return redirect('Photos');
    }

}
