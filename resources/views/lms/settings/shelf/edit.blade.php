@extends('app')

@section('content')

	<h1 class="judul">Edit Your Fucking Shelf</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.shelf') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::model($shelf, ['method' => 'PATCH', 'route' => ['settings.shelf.update', $shelf->id]]) !!}

				@include('lms/settings/shelf/_form', ['submitButtonText' => 'Edit Shelf', 'shelfLabel' => 'Edit Shelf.'])

			{!! Form::close() !!}

		</div>
		
		
		

@stop