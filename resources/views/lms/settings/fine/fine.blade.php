@extends('app')

@section('content')

	<h1 class="judul">FINES</h1>

	<div class="col-md-8">


		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Days</th>
					<th>Fines</th>
					<th>Options</th>

			</thead>

			<tbody>
				
				@foreach($fines as $fine)
				
					<tr>
					
						<td>{{ $fine->days }}</td>
						<td>{{ $fine->fines }}</td>
						<td><a href="{{ route('settings.fines.edit', $fine->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>
		
			

	</div>

@stop