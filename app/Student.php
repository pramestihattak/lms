<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $fillable = [
		'name',
		'registered_at',
		'borrow',
		'status'
	];

	public function transactions()
	{

		return $this->hasMany('App\Transaction');
		
	}

	public function scopeNotLimit($query)
	{
		
		return $query->where('borrow', '<', 3);

	}

	public function scopeActive($query)
	{
		
		return $query->where('status', 1);

	}

	public function scopeOrderByName($query)
	{
		
		return $query->orderBy('name');

	}

}
