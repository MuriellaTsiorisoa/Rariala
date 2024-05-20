@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($personnalisation, array('route' => array('personnalisations.update', $personnalisation->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('id_produit', 'Id_produit', ['class'=>'form-label']) }}
			{{ Form::text('id_produit', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('id_variant_option', 'Id_variant_option', ['class'=>'form-label']) }}
			{{ Form::text('id_variant_option', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
