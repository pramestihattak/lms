@extends('app')

@section('content')

	<h1 class="judul">Edit Your Fucking Fines</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.category') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::model($fine, ['method' => 'PATCH', 'route' => ['settings.fines.update', $fine->id]]) !!}

				@include('lms/settings/fine/_form', ['submitButtonText' => 'Edit Fines', 'daysLabel' => 'Days..', 'finesLabel' => 'Fines..'])

			{!! Form::close() !!}

		</div>
		
		
		

@stop