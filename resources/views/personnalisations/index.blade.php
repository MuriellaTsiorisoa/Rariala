@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('personnalisations.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>id_produit</th>
				<th>id_variant_option</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($personnalisations as $personnalisation)

				<tr>
					<td>{{ $personnalisation->id }}</td>
					<td>{{ $personnalisation->id_produit }}</td>
					<td>{{ $personnalisation->id_variant_option }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('personnalisations.show', [$personnalisation->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('personnalisations.edit', [$personnalisation->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['personnalisations.destroy', $personnalisation->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
