@extends('app')

@section('content')

	<h1 class="judul">Category</h1>

	<div class="col-md-8">

		<a href="{{ route('settings.category.add') }}" class="btn btn-danger">
			ADD NEW MOTHERFUCKING CATEGORY
		</a>

		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Category</th>
					<th>Options</th>

			</thead>

			<tbody>
				
				@foreach($categories as $category)
				
					<tr>
					
						<td>{{ $category->category }}</td>
						<td><a href="{{ route('settings.category.edit', $category->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;
							<a href="{{ route('settings.category.delete', $category->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>
			

	</div>

@stop