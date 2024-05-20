@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'stocks.store']) !!}

		<div class="mb-3">
			{{ Form::label('id_produit', 'Id_produit', ['class'=>'form-label']) }}
			{{ Form::text('id_produit', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('quantite_restante', 'Quantite_restante', ['class'=>'form-label']) }}
			{{ Form::text('quantite_restante', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop