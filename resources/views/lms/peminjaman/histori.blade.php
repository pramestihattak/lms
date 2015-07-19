@extends('app')

@section('content')

	<h1 class="judul">Histori</h1>

	<div class="col-md-8">
			
		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Student</th>
					<th>Book</th>
					<th>Borrowed At</th>
					<th>Returned At</th>
					<th>Fines</th>

			</thead>

			<tbody>
				
				@foreach($transactions as $transaction)
					
					<tr>
					
						<td>{{ $transaction->student->name }}</td>
						<td>{{ $transaction->book->title }}</td>
						<td>{{ date('d-M-y', $transaction->borrowed_at) }}</td>
						<td>{{ date('d-M-y', $transaction->returned_at) }}</td>
						<td>{{ $transaction->fines }}</td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>

	</div>
@stop