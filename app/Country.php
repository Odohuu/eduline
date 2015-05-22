<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $fillable = ['banner','name', 'flag', 'content'];

	public function schools()
    {
        return $this->hasMany('App\School');
    }
}
