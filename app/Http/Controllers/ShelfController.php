<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Shelf;
use App\Http\Requests\ShelfRequest;
use Illuminate\Http\Request;

class ShelfController extends Controller {

	public function __construct()
	{

		$this->middleware('auth');

	}

	public function index()
	{
		$shelves = Shelf::get();

		return view('lms.settings.shelf.shelf', compact('shelves'));
	}

	public function add()
	{
		
		return view('lms.settings.shelf.add');

	}

	public function store(ShelfRequest $request)
	{
		
		$input = $request->all();

		$shelf = Shelf::create($input);

		//flash messaging
		session()->flash('flash_message', 'You have been added 1 shelf!');

		return redirect()->route('settings.shelf');

	}

	public function edit($id)
	{
		
		$shelf = Shelf::findOrFail($id);

		return view('lms.settings.shelf.edit', compact('shelf'));

	}

	public function update($id, ShelfRequest $request)
	{
		
		$shelf = Shelf::findOrFail($id);

		$input = $request->all();

		$shelf->update($input);

		session()->flash('flash_message', 'You have been updated 1 shelf!');

		return redirect()->route('settings.shelf');		

	}

	public function delete($id)
	{
		
		$shelf = Shelf::findOrFail($id);

		$shelf->delete();

		session()->flash('flash_message', 'You have been deleted 1 shelf!');

		return redirect()->route('settings.shelf');

	}

}
