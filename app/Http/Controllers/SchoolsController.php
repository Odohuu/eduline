<?php namespace App\Http\Controllers;

use App\School;
use App\Country;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;

class SchoolsController extends Controller {

	public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$schools = School::latest('created_at')->get();

        return view('schools.index', compact('schools'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$countries = Country::lists('name', 'id');

        return view('schools.create', compact('countries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SchoolRequest $request)
	{
		//$country_id = Request::input('country_id');
		// dd($request->all());
		School::create($request->all());

        return redirect('schools');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$school = School::findOrFail($id);
		$flagPath = Country::findOrFail($school->country_id)->flag;
		return view('schools.show', compact('school', 'flagPath'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$school = School::findOrFail($id);
		$countries = Country::lists('name', 'id');

        return view('schools.edit', compact('school', 'countries' ));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SchoolRequest $request, $id)
	{
		$school = School::findOrFail($id);

		$school->update($request->all());

        return redirect('schools');
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
