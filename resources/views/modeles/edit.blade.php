@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($modele, array('route' => array('modeles.update', $modele->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('modele', 'Modele', ['class'=>'form-label']) }}
			{{ Form::text('modele', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
