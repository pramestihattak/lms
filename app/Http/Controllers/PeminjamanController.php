<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\Student;
use App\Transaction;
use App\Fine;
use App\Category;
use App\Http\Requests\PeminjamanRequest;
use Illuminate\Http\Request;

class PeminjamanController extends Controller {


	public function __construct()
	{

		$this->middleware('auth');

	}

	public function index()
	{
		
		//$books = Book::available()->orderByTitle()->lists('title', 'id');
		$students = Student::notLimit()->active()->orderByName()->lists('name', 'id');
		//$categories = Category::lists('category', 'id');
		$categories = Category::get();


		return view('lms.peminjaman.peminjaman', compact('students', 'categories'));

	}

	public function store(PeminjamanRequest $request)
	{
		
		$input = $request->all();

		$book_id = $input['book_id'];

		$student_id = $input['student_id'];

		$input['borrowed_at'] = time();

		$transaction = Transaction::create($input);

		$book = Book::findOrFail($book_id);

		$stock = $book['stock'] - 1;

		$book->update(['stock' => $stock]);

		$student = Student::findOrFail($student_id);

		$borrow = $student['borrow'] + 1;

		$student->update(['borrow' => $borrow]);

		session()->flash('flash_message', 'You have been added 1 transaction!');

		return redirect()->route('peminjaman.laporan');

	}

	public function laporan()
	{
		$tglSekarang = time();

		$transactions = Transaction::with('student', 'book')->notReturnedYet()->get(); 

		foreach ($transactions as $transaction) {
			
				$dateDiff = $tglSekarang - $transaction['borrowed_at'];
				$durasi = floor($dateDiff/(60 * 60 * 24));
				$fines = Fine::first();
				if($durasi > $fines['days']){
					$hariDenda = $durasi - $fines['days'];
					$denda = $hariDenda * $fines['fines'];
					$transaction->update(['fines' => $denda]);
				}
				else{
					$denda = 0;
					$transaction->update(['fines' => $denda]);
				}

		}
		
		//ambil tanggal
		//$date2 = mktime(0,0,0,05,31,2015);
		//return $date2;
		return view('lms.peminjaman.laporan', compact('transactions', 'durasi'));
	}

	public function pengembalian($id)
	{
		$returnedAt = time();

		$transaction = Transaction::findOrFail($id);

		$transaction->update(['status' => 1, 'returned_at' => $returnedAt]);

		//ini bisa langsung, cuman kan harus ambil data stock nya dulu mzzz
		//$transaction->book()->update(['stock' => 7]);

		$book = Book::findOrFail($transaction['book_id']);

		$stock = $book['stock'] + 1;

		$book->update(['stock' => $stock]);

		$student = Student::findOrFail($transaction['student_id']);

		$borrow = $student['borrow'] - 1;

		$student->update(['borrow' => $borrow]);

		session()->flash('flash_message', 'You have been doing 1 returned transaction!');

		return redirect()->route('peminjaman.histori');

	}

	public function perpanjang($id)
	{
		
		$transaction = Transaction::findOrFail($id);

		$dateNow = time();

		$transaction->update(['borrowed_at' => $dateNow, 'fines' => 0]);

		session()->flash('flash_message', 'You have been added 1 perpanjang!');

		return redirect()->route('peminjaman.laporan');

	}

	public function histori()
	{
		$transactions = Transaction::returned()->get();

		return view('lms.peminjaman.histori', compact('transactions'));
	}


}
