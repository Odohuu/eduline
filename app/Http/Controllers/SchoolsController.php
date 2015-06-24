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
		$usa_schools = Country::findOrFail(1)->schools()->orderBy('rank')->get();
		$usa_schools_flag = Country::findOrFail(1);
		$korea_schools = Country::findOrFail(2)->schools()->orderBy('rank')->get();
		$korea_schools_flag = Country::findOrFail(2);
		$australia_schools = Country::findOrFail(3)->schools()->orderBy('rank')->get();
		$australia_schools_flag = Country::findOrFail(3);
		$canada_schools = Country::findOrFail(4)->schools()->orderBy('rank')->get();
		$canada_schools_flag = Country::findOrFail(4);
		$japan_schools = Country::findOrFail(5)->schools()->orderBy('rank')->get();
		$japan_schools_flag = Country::findOrFail(5);
		
		return view('schools.index', compact('usa_schools','usa_schools_flag','korea_schools','korea_schools_flag', 'australia_schools','australia_schools_flag', 'canada_schools','canada_schools_flag', 'japan_schools', 'japan_schools_flag'));
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
		$school = School::findOrFail($id)->delete();

        return redirect('schools');
	}

}
