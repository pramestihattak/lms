<div class="form-group">
	{!! Form::label('shelf', $shelfLabel) !!}
	{!! Form::text('shelf', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@include('errors._errors')