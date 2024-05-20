@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($ligne_panier, array('route' => array('ligne_paniers.update', $ligne_panier->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('id_personnalisation', 'Id_personnalisation', ['class'=>'form-label']) }}
			{{ Form::text('id_personnalisation', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('id_produit', 'Id_produit', ['class'=>'form-label']) }}
			{{ Form::text('id_produit', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('quantite', 'Quantite', ['class'=>'form-label']) }}
			{{ Form::text('quantite', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('default', 'Default', ['class'=>'form-label']) }}
			{{ Form::string('default', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
