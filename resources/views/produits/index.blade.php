@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('produits.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>id_categorie</th>
				<th>id_modele</th>
				<th>nom</th>
				<th>paragraphe</th>
				<th>quantite</th>
				<th>default</th>
				<th>hauteur</th>
				<th>largeur</th>
				<th>prix_unitaire</th>
				<th>5</th>
				<th>taille</th>
				<th>MM</th>
				<th>GM</th>
				<th>type</th>
				<th>modele_existant</th>
				<th>produit</th>
				<th>image_urls</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($produits as $produit)

				<tr>
					<td>{{ $produit->id }}</td>
					<td>{{ $produit->id_categorie }}</td>
					<td>{{ $produit->id_modele }}</td>
					<td>{{ $produit->nom }}</td>
					<td>{{ $produit->paragraphe }}</td>
					<td>{{ $produit->quantite }}</td>
					<td>{{ $produit->default }}</td>
					<td>{{ $produit->hauteur }}</td>
					<td>{{ $produit->largeur }}</td>
					<td>{{ $produit->prix_unitaire }}</td>
					<td>{{ $produit->5 }}</td>
					<td>{{ $produit->taille }}</td>
					<td>{{ $produit->MM }}</td>
					<td>{{ $produit->GM }}</td>
					<td>{{ $produit->type }}</td>
					<td>{{ $produit->modele_existant }}</td>
					<td>{{ $produit->produit }}</td>
					<td>{{ $produit->image_urls }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('produits.show', [$produit->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('produits.edit', [$produit->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['produits.destroy', $produit->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
