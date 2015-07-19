<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Fine;
use App\Http\Requests\FinesRequest;
use Illuminate\Http\Request;

class FinesController extends Controller {

	public function __construct()
	{
		
		$this->middleware('auth');

	}

	public function index()
	{
		
		$fines = Fine::get();

		return view('lms.settings.fine.fine', compact('fines'));

	}

	public function edit($id)
	{
		
		$fine = Fine::findOrFail($id);

		return view('lms.settings.fine.edit', compact('fine'));

	}

	public function update($id, FinesRequest $request)
	{
		$fines = Fine::findOrFail($id);

		$input = $request->all();

		$fines->update($input);

		session()->flash('flash_message', 'You have been updated fines!');

		return redirect()->route('settings.fines');

	}

}
