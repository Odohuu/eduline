<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $photos = Photo::latest('created_at')->get();

        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store()
    {
        $input = Input::all();
        $path = public_path() .'/images/articles/';
        $fileName = $input['fileName']->getClientOriginalName();

        if (Input::get('checkImage') === '1')
        {
            Photo::create(array('path' => 'http://eduline.dev/images/articles/' .$fileName, 'name' => $input['name'] ));
            $image = Image::make($input['fileName']->getRealPath());
            File::exists($path) or File::makeDirectory($path);
            $image->save($path . $fileName, 100);
        }
        else
        {
            if (Input::get('checkImage') === '2')
            {
                Photo::create(array('path' => 'http://eduline.dev/images/articles/'. '300x300-' .$fileName, 'name' => $input['name'] ));
                $image = Image::make($input['fileName']->getRealPath());
                File::exists($path) or File::makeDirectory($path);
                $image->crop(300, 300)->save($path . '300x300-' . $fileName, 100);
            }
            else
            {
                return Redirect('photos');
            }
        }

        return Redirect('photos');
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function thumbnail(Photo $photo)
    {
//        $photo->findOrFail()
//        return view('', compact(''));
    }

     public function edit(Photo $photo)
     {
        return view('photos.edit', compact('photo' ));
     }

    public function destroy($id)
    {
        //
    }

}
