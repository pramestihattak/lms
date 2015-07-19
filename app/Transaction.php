<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {

	protected $fillable = [
		'student_id',
		'book_id',
		'borrowed_at',
		'returned_at',
		'fines',
		'status'
	];

	public function student()
	{
	
		return $this->belongsTo('App\Student');
	
	}

	public function book()
	{
	
		return $this->belongsTo('App\Book');
	
	}

	public function scopeNotReturnedYet($query)
	{
		
		return $query->where('status', 0);

	}

	public function scopeReturned($query)
	{
		
		return $query->where('status', 1);

	}

}
