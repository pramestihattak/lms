@extends('app')

@section('content')

	<h1 class="judul">Edit Your Fucking Fines</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.category') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::model($periode, ['method' => 'PATCH', 'route' => ['settings.periode.update', $periode->id]]) !!}

				@include('lms/settings/periode/_form', ['submitButtonText' => 'Edit Periode', 'daysLabel' => 'Days..'])

			{!! Form::close() !!}

		</div>
		
		
		

@stop