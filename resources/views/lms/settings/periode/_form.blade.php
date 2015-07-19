<div class="form-group">
	{!! Form::label('days', $daysLabel) !!}
	{!! Form::text('days', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@include('errors._errors')