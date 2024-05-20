@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('stocks.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>id_produit</th>
				<th>quantite_restante</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($stocks as $stock)

				<tr>
					<td>{{ $stock->id }}</td>
					<td>{{ $stock->id_produit }}</td>
					<td>{{ $stock->quantite_restante }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('stocks.show', [$stock->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('stocks.edit', [$stock->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['stocks.destroy', $stock->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
