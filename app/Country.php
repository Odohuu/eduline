<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $fillable = ['banner','name', 'flag', 'content'];

	public function schools()
    {
        return $this->hasMany('App\School');
    }

    public function albums()
    {
        return $this->hasMany('App\Album');
    }
    
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
