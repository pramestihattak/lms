<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Periode;
use App\Student;
use App\Http\Requests\PeriodeRequest;
use Illuminate\Http\Request;

class PeriodeController extends Controller {

	public function __construct()
	{
		
		$this->middleware('auth');

	}

	public function index()
	{
		
		$periodes = Periode::get();

		return view('lms.settings.periode.periode', compact('periodes'));

	}

	public function edit($id)
	{
		
		$periode = Periode::findOrFail($id);

		return view('lms.settings.periode.edit', compact('periode'));

	}

	public function update($id, PeriodeRequest $request)
	{
		$periode = Periode::findOrFail($id);

		$input = $request->all();

		$periode->update($input);

		//process
		$tglSekarang = time();

		$students = Student::get();

		foreach ($students as $student) {

			$dateDiff = $tglSekarang - $student['registered_at'];
			$durasi = floor($dateDiff/(60 * 60 * 24));
			$periodes = Periode::first();
			if($durasi > $periodes['days']){
				$student->update(['status' => 0]);
			}
			else{
				$student->update(['status' => 1]);
			}

		}	

		session()->flash('flash_message', 'You have been updated periode!');

		return redirect()->route('settings.periode');

	}


}
