@extends('app')

@section('content')

	<h1 class="judul">Add Your Fucking Category</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.category') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::open(['route' => 'settings.category.post']) !!}

				@include('lms/settings/category/_form', ['submitButtonText' => 'Add Category', 'categoryLabel' => 'Add new Category.'])

			{!! Form::close() !!}		

		</div>
		
		
		

@stop