@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'ligne_paniers.store']) !!}

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


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop