@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('ligne_paniers.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>id_personnalisation</th>
				<th>id_produit</th>
				<th>quantite</th>
				<th>default</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($ligne_paniers as $ligne_panier)

				<tr>
					<td>{{ $ligne_panier->id }}</td>
					<td>{{ $ligne_panier->id_personnalisation }}</td>
					<td>{{ $ligne_panier->id_produit }}</td>
					<td>{{ $ligne_panier->quantite }}</td>
					<td>{{ $ligne_panier->default }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('ligne_paniers.show', [$ligne_panier->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('ligne_paniers.edit', [$ligne_panier->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['ligne_paniers.destroy', $ligne_panier->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
