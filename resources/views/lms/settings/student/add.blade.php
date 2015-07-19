@extends('app')

@section('content')

	<h1 class="judul">Add Your Fucking Student</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.student') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::open(['route' => 'settings.student.post']) !!}

				@include('lms/settings/student/_form', ['submitButtonText' => 'Add Student'])

			{!! Form::close() !!}		

		</div>
		
		
		

@stop