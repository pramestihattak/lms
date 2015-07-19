@extends('app')

@section('content')

	<h1 class="judul">Books</h1>

	<div class="col-md-8">

		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Title</th>
					<th>Author</th>
					<th>Year</th>
					<th>Stock</th>
					<th>Category</th>
					<th>Shelf</th>

			</thead>

			<tbody>
				
				@foreach($books as $book)
				
					<tr>
					
						<td>{{ $book->title }}</td>
						<td>{{ $book->author }}</td>
						<td>{{ $book->year }}</td>
						<td>
							@if($book->stock > 0)
								Available
							@elseif($book->stock == 0)
								-
							@endif
						</td>
						<td>{{ $book->category->category }}</td>
						<td>{{ $book->shelf->shelf }}</td>
	
					</tr>

				@endforeach	

			</tbody>
			
		</table>
			

	</div>

@stop