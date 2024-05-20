@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('modeles.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>modele</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($modeles as $modele)

				<tr>
					<td>{{ $modele->id }}</td>
					<td>{{ $modele->modele }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('modeles.show', [$modele->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('modeles.edit', [$modele->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['modeles.destroy', $modele->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
