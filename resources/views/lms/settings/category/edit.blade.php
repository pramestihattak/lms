@extends('app')

@section('content')

	<h1 class="judul">Edit Your Fucking Category</h1>

	<div class="col-md-4">

		<a href="{{ route('settings.category') }}" class="btn btn-danger">
			<span class="glyphicon glyphicon-chevron-left" ></span> BACK
		</a>
		
	</div>

		<div class="col-md-4" >
		
			{!! Form::model($category, ['method' => 'PATCH', 'route' => ['settings.category.update', $category->id]]) !!}

				@include('lms/settings/category/_form', ['submitButtonText' => 'Edit Category', 'categoryLabel' => 'Edit Category.'])

			{!! Form::close() !!}

		</div>
		
		
		

@stop