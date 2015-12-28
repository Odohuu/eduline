<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller {

    /**
     *Create a new articles controller instance
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::all();

        return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoryRequest $request)
	{
		
        Category::create($request->all());
//        flash()->success('Шинээр нийтлэл үүсгэгдлээ');

        return redirect('categories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $articles = Category::findOrFail($id)->articles()->latest('created_at')->get();
        $Category = Category::findOrFail($id);
        return view('categories.show',compact('articles', 'Category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $category = Category::findOrFail($id);

        return view('categories.edit',compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CategoryRequest $request)
	{
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect('categories');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $category = User::findOfFail($id);

        $category->delete();

        return redirect('articles');
	}

}
