@extends('app')

@section('content')

	<h1 class="judul">Student</h1>

	<div class="col-md-8">

		<a href="{{ route('settings.student.add') }}" class="btn btn-danger">
			ADD NEW MOTHERFUCKING STUDENT
		</a>

		<br><br>

		<table class="table table-striped table-bordered">

			<thead>
					
					<th>Name</th>
					<th>Registered At</th>
					<th>Borrow</th>
					<th>Status</th>
					<th colspan="2"><center>Options</center></th>

			</thead>

			<tbody>
				
				@foreach($students as $student)
				
					<tr>
					
						<td>{{ $student->name }}</td>
						<td>{{ date('d-M-y', $student->registered_at) }}</td>
						<td>{{ $student->borrow }}</td>
						<td>
							@if($student->status == 1)
								Active
							@else
								-
							@endif
						</td>
						<td>
							@if($student->status == 1)
								<a href="{{ route('settings.student.down', $student->id) }}" class="btn btn-danger">Matikan Masa Aktif</a>
							@else
								<a href="{{ route('settings.student.up', $student->id) }}" class="btn btn-primary">Perpanjang Masa Aktif</a>
							@endif
						</td>
						<td><a href="{{ route('settings.student.edit', $student->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;
							<a href="{{ route('settings.student.delete', $student->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>

					</tr>

				@endforeach	

			</tbody>
			
		</table>
			

	</div>

@stop