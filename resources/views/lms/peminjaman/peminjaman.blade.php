@extends('app')

@section('content')

	<h1 class="judul">Peminjaman</h1>

	<div class="col-md-8">
			
			{!! Form::open(['route' => 'peminjaman.post']) !!}
				
				<div class="form-group"> 
					{!! Form::label('student_id', 'Student..') !!}
					{!! Form::select('student_id', $students, null, ['id' => 'student_id', 'class' => 'form-control']) !!}
				</div>
				
				<div class="form-group"> 
					<!--{!! Form::label('category', 'Category..') !!}
					{!! Form::select('category', $categories, null, ['id' => 'category', 'class' => 'form-control']) !!} -->
					<select id="category" name="category" class="form-control" >
					
						@foreach($categories as $category)
							<option value="{{ $category->id }}" >{{ $category->category }}</option>
						@endforeach
					
					</select>

				</div>				

				<div class="form-group"> 
					<!--{!! Form::label('book_id', 'Book..') !!}
					{!! Form::select('book_id', [], null, ['id' => 'book_id', 'class' => 'form-control']) !!} -->
					<select id="book_id" name="book_id" class="form-control">
						<option>-- Choice The Book --</option>
					</select>		
				</div>

				<div class="form-group"> 
					{!! Form::submit('Pinjam', ['class' => 'btn btn-primary form-control']) !!}
				</div>


			{!! Form::close() !!}
			

	</div>
@stop

@section('footer')

	<script type="text/javascript">
		$('#category').on('change', function(e){
			console.log(e);

			var category_id = e.target.value;

			//ajax
			$.get('/api/dropdown/peminjaman/' + category_id, function(data){
				
				//if success data
				
				$('#book_id').empty();
				$.each(data, function(index, booksObj){

					$('#book_id').append('<option value="' +booksObj.id+ '">' +booksObj.title+ '</option>');

				});

			}); 

		});
	</script>

@stop