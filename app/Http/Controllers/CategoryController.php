<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller {

	public function __construct()
	{

		$this->middleware('auth');

	}

	public function index()
	{
		
		$categories = Category::get();

		return view('lms.settings.category.category', compact('categories'));

	}

	public function add()
	{
		
		return view('lms.settings.category.add');

	}

	public function store(CategoryRequest $request)
	{
		
		$input = $request->all();

		$category = Category::create($input);

		session()->flash('flash_message', 'You have been addded 1 category!');

		return redirect()->route('settings.category');

	}

	public function edit($id)
	{
		
		$category = Category::findOrFail($id);

		return view('lms.settings.category.edit', compact('category'));

	}


	public function update($id, CategoryRequest $request)
	{
		
		$category = Category::findOrFail($id);

		$input = $request->all();

		session()->flash('flash_message', 'You have been updated 1 category!');

		$category->update($input);

		return redirect()->route('settings.category');		

	}

	public function delete($id)
	{
		
		$category = Category::findOrFail($id);

		$category->delete();

		session()->flash('flash_message', 'You have been deleted 1 category!');

		return redirect()->route('settings.category');

	}

}
