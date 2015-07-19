<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\Category;
use App\Shelf;
use App\Periode;
use App\Student;
use Illuminate\Http\Request;

class PagesController extends Controller {

	

	public function __construct()
	{

		$this->middleware('auth');
		

	}

	public function index()
	{
		$tglSekarang = time();

		$students = Student::get();

		foreach ($students as $student) {

			$dateDiff = $tglSekarang - $student['registered_at'];
			$durasi = floor($dateDiff/(60 * 60 * 24));
			$periode = Periode::first();
			if($durasi > $periode['days']){
				$student->update(['status' => 0]);
			}
			else{
				$student->update(['status' => 1]);
			}

		}		

		return view('lms.index');

	}

	public function books()
	{
		
		$books = Book::with('category', 'shelf')->orderByTitle()->get();

		return view('lms.books', compact('books'));

	}

}
