@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'variant_options.store']) !!}

		<div class="mb-3">
			{{ Form::label('id_variant', 'Id_variant', ['class'=>'form-label']) }}
			{{ Form::text('id_variant', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('variant_option', 'Variant_option', ['class'=>'form-label']) }}
			{{ Form::text('variant_option', null, array('class' => 'form-control')) }}
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
			{{ Form::label('image_urls', 'Image_urls', ['class'=>'form-label']) }}
			{{ Form::text('image_urls', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop