<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SchoolRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'country_id' => 'required|integer',
            'thumbnail' => 'required',
			'banner' => 'required',
            'name' => 'required',
            'rank' => 'required|integer',
            'description' => 'required',
            'media' => 'required',
            'file' => 'required'
		];
	}

}
