@extends('app')

@section('content')

	<h1 class="judul">Shelf</h1>

	<div class="col-md-8">

		<a href="{{ route('settings.shelf.add') }}" class="btn btn-danger">
			ADD NEW MOTHERFUCKING SHELF
		</a>

		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Shelf</th>
					<th>Options</th>

			</thead>

			<tbody>
				
				@foreach($shelves as $shelf)
				
					<tr>
					
						<td>{{ $shelf->shelf }}</td>
						<td><a href="{{ route('settings.shelf.edit', $shelf->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;
							<a href="{{ route('settings.shelf.delete', $shelf->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>

		
			

	</div>

@stop