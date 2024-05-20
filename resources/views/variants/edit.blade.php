@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($variant, array('route' => array('variants.update', $variant->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('variant', 'Variant', ['class'=>'form-label']) }}
			{{ Form::text('variant', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
