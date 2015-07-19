@extends('app')

@section('content')

	<h1 class="judul">Laporan</h1>

	<div class="col-md-12">
			
		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Student</th>
					<th>Book</th>
					<th>Borrowed At</th>
					<th>Fines</th>
					<th colspan="2"><center>What You Gonna Do</center></th>

			</thead>

			<tbody>
				
				@foreach($transactions as $transaction)
					
					<tr>
					
						<td>{{ $transaction->student->name }}</td>
						<td>{{ $transaction->book->title }}</td>
						<td>{{ date('d-M-y', $transaction->borrowed_at) }}</td>
						<td>Rp. {{ $transaction->fines }}</td>
						<td><a href="{{ route('peminjaman.pengembalian', $transaction->id) }}"><span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span>&nbsp; Pengembalian</a></td>
						<td><a href="{{ route('peminjaman.perpanjang', $transaction->id) }}"><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>&nbsp; Perpanjang Masa Peminjaman</a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>

	</div>
@stop