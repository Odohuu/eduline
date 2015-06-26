<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use App\Album;
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
        $photos = Photo::latest('created_at')->paginate(10);
        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store()
    {
        $input = Input::all();
        $path = public_path('images/articles/');
        $path2 = public_path('images/photos/');
        $fileName = $input['fileName']->getClientOriginalName();
        $random_name = str_random(8);
        
        if (Input::get('checkImage') == '1')
        {
        	if ($input['fileName']->isValid()) {
        		$extension = Input::file('fileName')->getClientOriginalExtension();

        		$fileName = time() .'-'.$fileName;
        		Input::file('fileName')->move($path, $fileName);
        		Photo::create(array('path' => $fileName, 'name' => $input['name'] ));
        	}

        }
        else
        {
            if (Input::get('checkImage') == '2')
            {
            	if ($input['fileName']->isValid()) {
                    $fileName = time() .'-'.$fileName;
        		//$extension = Input::file('fileName')->getClientOriginalExtension();
        		//Input::file('fileName')->move($path, $fileName);
        		$image = Image::make(Input::file('fileName'));
        		$image->resize(300,null, function ($constraint) { $constraint->aspectRatio(); });
        		$image->save($path2.$fileName,100);        		
        		Photo::create(array('path' => $fileName, 'name' => $input['name'] ));
        	       }                
            }
            else
            {
                if (Input::get('checkImage') == '3') 
                {
                    if ($input['fileName']->isValid()) {
                        $fileName = $random_name .'-'.$fileName;
                        //Input::file('fileName')->move($path2, $fileName);
                        // Input::file('fileName')
                        $image = Image::make(Input::file('fileName'));
                        $image->resize(null, 700, function ($constraint) { $constraint->aspectRatio(); $constraint->upsize();});
                        $image->save($path2.$fileName,100);

                        Photo::create(array('path' => $fileName, 'name' => $input['name'] ));
                    }
                }else{
                     return Redirect('photos');
                }
            }
        }

        return Redirect('photos');
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function thumbnail($id)
    {

    }

     public function edit($id)
     {
        $photo = Photo::findOrFail($id);

        return view('photos.edit', compact('photo' ));
     }

    public function destroy($id)
    {
        $fileName = Photo::findOrFail($id)->path;
        $path = public_path('images/articles/');

        File::delete($path.''.$fileName);
        Photo::findOrFail($id)->delete();

        return redirect('photos');
    }
    public function delete($id)
    {
        $fileName = Image::findOrFail($id)->path;
        $path = public_path('images/photos/');

        File::delete($path.''.$fileName);
        Image::findOrFail($id)->delete();

        return redirect('albums');
    }

}