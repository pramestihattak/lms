<div class="form-group">
	{!! Form::label('category', $categoryLabel) !!}
	{!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@include('errors._errors')