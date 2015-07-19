@extends('app')

@section('content')

	<h1 class="judul">Book</h1>

	<div class="col-md-8">

		<a href="{{ route('settings.book.add') }}" class="btn btn-danger">
			ADD NEW BOOK
		</a>

		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Title</th>
					<th>Author</th>
					<th>Year</th>
					<th>Stock</th>
					<th>Category</th>
					<th>Shelf</th>
					<th>Options</th>

			</thead>

			<tbody>
				
				@foreach($books as $book)
				
					<tr>
					
						<td>{{ $book->title }}</td>
						<td>{{ $book->author }}</td>
						<td>{{ $book->year }}</td>
						<td>{{ $book->stock }}</td>
						<td>{{ $book->category->category }}</td>
						<td>{{ $book->shelf->shelf }}</td>
						<td><a href="{{ route('settings.book.edit', $book->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;
							<a href="{{ route('settings.book.delete', $book->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>
			

	</div>

@stop