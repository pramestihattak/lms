@extends('app')

@section('content')

	<h1 class="judul">Add Your Fucking Category</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.shelf') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::open(['route' => 'settings.shelf.post']) !!}

				@include('lms/settings/shelf/_form', ['submitButtonText' => 'Add Shelf', 'shelfLabel' => 'Add new Shelf.'])

			{!! Form::close() !!}		

		</div>
		
		
		

@stop