<div class="form-group"> 
	{!! Form::label('title', 'Title..') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::label('author', 'Author..') !!}
	{!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::label('year', 'Year..') !!}
	{!! Form::select('year', $years, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::label('stock', 'Stock..') !!}
	{!! Form::text('stock', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::label('category_id', 'Category..') !!}
	{!! Form::select('category_id', $categories, null, ['id' => 'category_id', 'class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::label('shelf_id', 'Shelf..') !!}
	{!! Form::select('shelf_id', $shelves, null, ['id' => 'shelf_id', 'class' => 'form-control']) !!}
</div>

<div class="form-group"> 
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@include('errors._errors')