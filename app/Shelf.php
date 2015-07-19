<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model {

	protected $fillable = [
		'shelf'
	];

	public function books()
	{
		return $this->hasMany('App\Book');
	}

}
