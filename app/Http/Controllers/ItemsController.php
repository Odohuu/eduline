<?php namespace App\Http\Controllers;

use App\Item;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\ItemRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ItemsController extends Controller {

	public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','slide', 'all']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Item::latest('created_at')->paginate(10);
		return view('items.index', compact('items'));
	}

	public function all()
    {
        $items = Item::latest('created_at')->paginate(6);

         return view('items.all', compact('items'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::lists('name','id');

		return view('items.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		$file = $input['image'];
   		
   		$random_name = str_random(8);
    	$path = public_path('images/slides/');
    	$extension = $file->getClientOriginalName();

    	$filename=$random_name.'_slide_'.$extension;

    	//$uploadSuccess = Input::file('image')->move($path, $filename);

    	$image = Image::make(Input::file('image'))->resize(582, 350);
    	$image->save($path.$filename,100);

    	Item::create(array('category_id' => $input['category_id'], 'slug' => $input['slug'], 'description' => $input['description'], 'image' => $filename ));
    	
		return redirect('items');
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
		$categories = Category::lists('name','id');

		$item = Item::findOrFail($id);

		return view('items.edit',compact('item','categories'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ItemRequest $request)
	{

		$item = Item::findOrFail($id);

        $item->update($request->all());

        return redirect('items');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$fileName = Item::findOrFail($id)->path;
        $path = public_path('images/slides/');

        File::delete($path.$fileName);
        Item::findOrFail($id)->delete();

		return redirect('items');
	}

}
