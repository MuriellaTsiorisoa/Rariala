@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('variant_options.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>id_variant</th>
				<th>variant_option</th>
				<th>prix_unitaire</th>
				<th>5</th>
				<th>image_urls</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($variant_options as $variant_option)

				<tr>
					<td>{{ $variant_option->id }}</td>
					<td>{{ $variant_option->id_variant }}</td>
					<td>{{ $variant_option->variant_option }}</td>
					<td>{{ $variant_option->prix_unitaire }}</td>
					<td>{{ $variant_option->5 }}</td>
					<td>{{ $variant_option->image_urls }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('variant_options.show', [$variant_option->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('variant_options.edit', [$variant_option->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['variant_options.destroy', $variant_option->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
