<?php
use App\Book;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/api/dropdown/peminjaman/{id}', [
//		'as' => 'api.dropdown.peminjaman', 'uses' => 'PeminjamanController@dropdown'
//	]);

Route::get('/api/dropdown/peminjaman/{id}', function($id){

	if(Request::ajax()){

		//$category_id = Input::get('category_id');

		$books = Book::available()->orderByTitle()->where('category_id', '=', $id)->get();

		return Response::json($books);

	}

	

});


Route::get('/', [
		'as' => 'index', 'uses' => 'PagesController@index'
	]);
Route::get('books', [
		'as' => 'books', 'uses' => 'PagesController@books'
	]);

Route::get('peminjaman', [
		'as' => 'peminjaman.peminjaman', 'uses' => 'PeminjamanController@index'
	]);
Route::post('peminjaman', [
		'as' => 'peminjaman.post', 'uses' => 'PeminjamanController@store'
	]);

Route::get('laporan', [
		'as' => 'peminjaman.laporan', 'uses' => 'PeminjamanController@laporan'
	]);
Route::get('pengembalian/{id}', [
		'as' => 'peminjaman.pengembalian', 'uses' => 'PeminjamanController@pengembalian'
	]);
Route::get('perpanjang/{id}', [
		'as' => 'peminjaman.perpanjang', 'uses' => 'PeminjamanController@perpanjang'
	]);

Route::get('histori', [
		'as' => 'peminjaman.histori', 'uses' => 'PeminjamanController@histori'
	]);





//setting


//=================================================setting category====================================================
Route::get('/settings/category', [
		'as' => 'settings.category', 'uses' => 'CategoryController@index'
	]);
Route::get('/settings/category/add', [
		'as' => 'settings.category.add', 'uses' => 'CategoryController@add'
	]);
Route::post('settings/category/add', [
		'as' => 'settings.category.post', 'uses' => 'CategoryController@store'
	]);
Route::get('settings/category/edit/{id}', [
		'as' => 'settings.category.edit', 'uses' => 'CategoryController@edit'
	]);
Route::patch('settings/category/edit/{id}', [
		'as' => 'settings.category.update', 'uses' => 'CategoryController@update'
	]);
Route::get('settings/category/delete/{id}', [
		'as' => 'settings.category.delete', 'uses' => 'CategoryController@delete'
	]);
//==========================================================================================================================


//=================================================setting shelf==========================================================
Route::get('/settings/shelf', [
		'as' => 'settings.shelf', 'uses' => 'ShelfController@index'
	]);
Route::get('/settings/shelf/add', [
		'as' => 'settings.shelf.add', 'uses' => 'ShelfController@add'
	]);
Route::post('settings/shelf/add', [
		'as' => 'settings.shelf.post', 'uses' => 'ShelfController@store'
	]);
Route::get('settings/shelf/edit/{id}', [
		'as' => 'settings.shelf.edit', 'uses' => 'ShelfController@edit'
	]);
Route::patch('settings/shelf/edit/{id}', [
		'as' => 'settings.shelf.update', 'uses' => 'ShelfController@update'
	]);
Route::get('settings/category/delete/{id}', [
		'as' => 'settings.shelf.delete', 'uses' => 'ShelfController@delete'
	]);
//==========================================================================================================================


//=================================================setting fines==========================================================
Route::get('/settings/fines', [
		'as' => 'settings.fines', 'uses' => 'FinesController@index'
	]);
Route::get('settings/fines/edit/{id}', [
		'as' => 'settings.fines.edit', 'uses' => 'FinesController@edit'
	]);
Route::patch('settings/fines/edit/{id}', [
		'as' => 'settings.fines.update', 'uses' => 'FinesController@update'
	]);
//==========================================================================================================================


//=================================================setting periode==========================================================
Route::get('/settings/periode', [
		'as' => 'settings.periode', 'uses' => 'PeriodeController@index'
	]);
Route::get('settings/periode/edit/{id}', [
		'as' => 'settings.periode.edit', 'uses' => 'PeriodeController@edit'
	]);
Route::patch('settings/periode/edit/{id}', [
		'as' => 'settings.periode.update', 'uses' => 'PeriodeController@update'
	]);
//==========================================================================================================================

//=================================================setting student==========================================================
Route::get('/settings/student', [
		'as' => 'settings.student', 'uses' => 'StudentController@index'
	]);
Route::get('/settings/student/add', [
		'as' => 'settings.student.add', 'uses' => 'StudentController@add'
	]);
Route::post('settings/student/add', [
		'as' => 'settings.student.post', 'uses' => 'StudentController@store'
	]);
Route::get('settings/student/edit/{id}', [
		'as' => 'settings.student.edit', 'uses' => 'StudentController@edit'
	]);
Route::patch('settings/student/edit/{id}', [
		'as' => 'settings.student.update', 'uses' => 'StudentController@update'
	]);
Route::get('settings/student/delete/{id}', [
		'as' => 'settings.student.delete', 'uses' => 'StudentController@delete'
	]);
Route::get('settings/student/down/{id}', [
		'as' => 'settings.student.down', 'uses' => 'StudentController@down'
	]);
Route::get('settings/student/up/{id}', [
		'as' => 'settings.student.up', 'uses' => 'StudentController@up'
	]);
//==========================================================================================================================

//=================================================setting book=============================================================
Route::get('/settings/book', [
		'as' => 'settings.book', 'uses' => 'BookController@index'
	]);
Route::get('/settings/book/add', [
		'as' => 'settings.book.add', 'uses' => 'BookController@add'
	]);
Route::post('settings/book/add', [
		'as' => 'settings.book.post', 'uses' => 'BookController@store'
	]);
Route::get('settings/book/edit/{id}', [
		'as' => 'settings.book.edit', 'uses' => 'BookController@edit'
	]);
Route::patch('settings/book/edit/{id}', [
		'as' => 'settings.book.update', 'uses' => 'BookController@update'
	]);
Route::get('settings/book/delete/{id}', [
		'as' => 'settings.book.delete', 'uses' => 'BookController@delete'
	]);

//========================================================================================================================


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
