<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\Category;
use App\Shelf;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller {

	public function __construct()
	{

		$this->middleware('auth');

	}

	public function index()
	{
		
		$books = Book::with('category', 'shelf')->get();

		return view('lms.settings.book.book', compact('books'));

	}

	public function add()
	{
		$categories = Category::lists('category', 'id');
		$shelves = Shelf::lists('shelf', 'id');
	
		$tanggal = date('Y-m-d');
		$ambilTahun = substr($tanggal, 0, 4);
		for($tahun = 1990; $tahun <= $ambilTahun; $tahun++){
			$years[] = $tahun;	
		}
		
		return view('lms.settings.book.add', compact('categories', 'shelves', 'years'));
	}

	public function store(BookRequest $request)
	{
		
		$input = $request->all();

		$book = Book::create($input);

		session()->flash('flash_message', 'You have been addded 1 book!');

		return redirect()->route('settings.book');

	}

	public function edit($id)
	{
		
		$book = Book::findOrFail($id);
		$categories = Category::lists('category', 'id');
		$shelves = Shelf::lists('shelf', 'id');

		return view('lms.settings.book.edit', compact('book', 'categories', 'shelves'));


	}

	public function update($id, BookRequest $request)
	{
		
		$book = Book::findOrFail($id);

		$input = $request->all();

		$book->update($input);

		session()->flash('flash_message', 'You have been updated 1 book!');

		return redirect()->route('settings.book');

	}

	public function delete($id)
	{
		
		$book = Book::findOrFail($id);

		$book->delete();

		session()->flash('flash_message', 'You have been deleted 1 book!');

		return redirect()->route('settings.book');

	}

}
