@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'paniers.store']) !!}

		<div class="mb-3">
			{{ Form::label('id_ligne_panier', 'Id_ligne_panier', ['class'=>'form-label']) }}
			{{ Form::text('id_ligne_panier', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop