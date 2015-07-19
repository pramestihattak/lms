@extends('app')

@section('content')

	<h1 class="judul">PERIODE</h1>

	<div class="col-md-8">


		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Days</th>
					<th>Options</th>

			</thead>

			<tbody>
				
				@foreach($periodes as $periode)
				
					<tr>
					
						<td>{{ $periode->days }}</td>
						<td><a href="{{ route('settings.periode.edit', $periode->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>
		
			

	</div>

@stop