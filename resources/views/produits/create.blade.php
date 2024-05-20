@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'produits.store']) !!}

		<div class="mb-3">
			{{ Form::label('id_categorie', 'Id_categorie', ['class'=>'form-label']) }}
			{{ Form::text('id_categorie', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('id_modele', 'Id_modele', ['class'=>'form-label']) }}
			{{ Form::text('id_modele', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
			{{ Form::text('nom', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('paragraphe', 'Paragraphe', ['class'=>'form-label']) }}
			{{ Form::text('paragraphe', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('quantite', 'Quantite', ['class'=>'form-label']) }}
			{{ Form::text('quantite', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('default', 'Default', ['class'=>'form-label']) }}
			{{ Form::string('default', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('hauteur', 'Hauteur', ['class'=>'form-label']) }}
			{{ Form::text('hauteur', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('largeur', 'Largeur', ['class'=>'form-label']) }}
			{{ Form::text('largeur', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('prix_unitaire', 'Prix_unitaire', ['class'=>'form-label']) }}
			{{ Form::text('prix_unitaire', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('5', '5', ['class'=>'form-label']) }}
			{{ Form::string('5', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('taille', 'Taille', ['class'=>'form-label']) }}
			{{ Form::text('taille', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('MM', 'MM', ['class'=>'form-label']) }}
			{{ Form::text('MM', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('GM', 'GM', ['class'=>'form-label']) }}
			{{ Form::string('GM', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('type', 'Type', ['class'=>'form-label']) }}
			{{ Form::text('type', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('modele_existant', 'Modele_existant', ['class'=>'form-label']) }}
			{{ Form::text('modele_existant', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('produit', 'Produit', ['class'=>'form-label']) }}
			{{ Form::string('produit', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('image_urls', 'Image_urls', ['class'=>'form-label']) }}
			{{ Form::text('image_urls', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop