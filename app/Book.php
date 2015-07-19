<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	protected $fillable = [
		'title',
		'author',
		'year',
		'stock',
		'category_id',
		'shelf_id'
	];

	public function category()
	{
	
		return $this->belongsTo('App\Category');
	
	}

	public function shelf()
	{
	
		return $this->belongsTo('App\Shelf');
	
	}

	public function transactions()
	{

		return $this->hasMany('App\Transaction');

	}

	public function scopeAvailable($query)
	{
		
		return $query->where('stock', '>', 0);

	}

	public function scopeOrderByTitle($query)
	{
		
		return $query->orderBy('title');

	}

}
