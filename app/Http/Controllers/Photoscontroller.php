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
        $fileName = $input['fileName']->getClientOriginalName();
        $today = date('Y-m-d');
        
        //dd($path);
        
        if (Input::get('checkImage') == '1')
        {
        	if ($input['fileName']->isValid()) {
        		$extension = Input::file('fileName')->getClientOriginalExtension();
        		$fileName = time() .'-'.$fileName;
        		Input::file('fileName')->move($path, $fileName);
        		Photo::create(array('path' => 'http://edulinellc.mn/images/articles/'.$fileName, 'name' => $input['name'] ));
        	}
            /*$image = Image::make($input['fileName']->getRealPath());
            //File::exists($path) or File::makeDirectory($path);
            dd($image);
            $image->save($path . $today .'-'. $fileName, 100);
            
            //Photo::create(array('path' => 'http://edulinellc.mn/images/articles/'. $today .'-' . $fileName, 'name' => $input['name'] ));
            
            dd($image->response());*/
        }
        else
        {
            if (Input::get('checkImage') == '2')
            {
            	if ($input['fileName']->isValid()) {
        		$extension = Input::file('fileName')->getClientOriginalExtension();
        		$fileName = time() .'-'.$fileName;
        		Input::file('fileName')->move($path, $fileName);
        		$image = Image::make($path.''.$fileName);
        		$image->fit(300);
        		$image->save();        		
        		Photo::create(array('path' => 'http://edulinellc.mn/images/articles/'.$fileName, 'name' => $input['name'] ));
        	}
                /*Photo::create(array('path' => 'http://edulinellc.mn/images/articles/'. '-300x300-' .$fileName, 'name' => $input['name'] ));
                $image = Image::make($input['fileName']->getRealPath());
                File::exists($path) or File::makeDirectory($path);
                $image->crop(300, 300)->save($path . $today .'-300x300-' . $fileName, 100);*/
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