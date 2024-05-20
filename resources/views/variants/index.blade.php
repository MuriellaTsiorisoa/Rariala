@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('variants.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>variant</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($variants as $variant)

				<tr>
					<td>{{ $variant->id }}</td>
					<td>{{ $variant->variant }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('variants.show', [$variant->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('variants.edit', [$variant->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['variants.destroy', $variant->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
