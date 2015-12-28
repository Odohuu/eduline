<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $fillable = ['country_id','thumbnail','banner','name', 'rank', 'description','media','file'];

	public function Country()
    {
        return $this->belongsTo('App\Country');
    }

}
