@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('commandes.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>id_panier</th>
				<th>id_user</th>
				<th>nom</th>
				<th>email</th>
				<th>adresse_livraison</th>
				<th>reperage_livraison</th>
				<th>ville</th>
				<th>province</th>
				<th>code_postal</th>
				<th>telephone</th>
				<th>reference_transfert</th>
				<th>date_commande</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($commandes as $commande)

				<tr>
					<td>{{ $commande->id }}</td>
					<td>{{ $commande->id_panier }}</td>
					<td>{{ $commande->id_user }}</td>
					<td>{{ $commande->nom }}</td>
					<td>{{ $commande->email }}</td>
					<td>{{ $commande->adresse_livraison }}</td>
					<td>{{ $commande->reperage_livraison }}</td>
					<td>{{ $commande->ville }}</td>
					<td>{{ $commande->province }}</td>
					<td>{{ $commande->code_postal }}</td>
					<td>{{ $commande->telephone }}</td>
					<td>{{ $commande->reference_transfert }}</td>
					<td>{{ $commande->date_commande }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('commandes.show', [$commande->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('commandes.edit', [$commande->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['commandes.destroy', $commande->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
