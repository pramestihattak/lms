<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller {

	public function __construct()
	{

		$this->middleware('auth');

	}

	public function index()
	{
		
		$students = Student::get();

		return view('lms.settings.student.student', compact('students'));

	}

	public function add()
	{

		return view('lms.settings.student.add');

	}

	public function store(StudentRequest $request)
	{
		
		$input = $request->all();

		$input['registered_at'] = time();

		$student = Student::create($input);

		return redirect()->route('settings.student');

		session()->flash('flash_message', 'You have been added 1 student!');

	}

	public function edit($id)
	{
		
		$student = Student::findOrFail($id);

		return view('lms.settings.student.edit', compact('student'));

	}

	public function update($id, StudentRequest $request)
	{
		
		$student = Student::findOrFail($id);

		$input = $request->all();

		$student->update($input);

		session()->flash('flash_message', 'You have been updated 1 student!');

		return redirect()->route('settings.student');		

	}

	public function delete($id)
	{
		
		$student = Student::findOrFail($id);

		$student->delete();

		session()->flash('flash_message', 'You have been deleted 1 student!');

		return redirect()->route('settings.student');

	}

	public function down($id)
	{
		
		$student = Student::findOrFail($id);

		$student->update(['status' => 0, 'registered_at' => 12960000]);

		session()->flash('flash_message', 'Anda telah mematikan masa aktif 1 siswa!');

		return redirect()->route('settings.student');

	}

	public function up($id)
	{
		$dateNow = time();

		$student = Student::findOrFail($id);

		$student->update(['status' => 1, 'registered_at' => $dateNow]);

		session()->flash('flash_message', 'Anda telah melakukan perpanjangan masa aktif siswa!');

		return redirect()->route('settings.student');


	}

}
