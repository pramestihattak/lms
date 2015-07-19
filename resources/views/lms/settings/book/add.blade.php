@extends('app')

@section('content')

	<h1 class="judul">Add Your Book</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.book') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::open(['route' => 'settings.book.post']) !!}

				@include('lms/settings/book/_form', ['submitButtonText' => 'Add Book'])

			{!! Form::close() !!}		

		</div>
		
		
		

@stop