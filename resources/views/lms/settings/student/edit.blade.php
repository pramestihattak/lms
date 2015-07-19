@extends('app')

@section('content')

	<h1 class="judul">Edit Your Fucking Student</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.student') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::model($student, ['method' => 'PATCH', 'route' => ['settings.student.update', $student->id]]) !!}

				@include('lms/settings/student/_form', ['submitButtonText' => 'Edit Student'])

			{!! Form::close() !!}

		</div>
		
		
		

@stop