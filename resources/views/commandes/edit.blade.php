@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($commande, array('route' => array('commandes.update', $commande->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('id_panier', 'Id_panier', ['class'=>'form-label']) }}
			{{ Form::text('id_panier', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('id_user', 'Id_user', ['class'=>'form-label']) }}
			{{ Form::text('id_user', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nom', 'Nom', ['class'=>'form-label']) }}
			{{ Form::text('nom', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('email', 'Email', ['class'=>'form-label']) }}
			{{ Form::text('email', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('adresse_livraison', 'Adresse_livraison', ['class'=>'form-label']) }}
			{{ Form::text('adresse_livraison', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('reperage_livraison', 'Reperage_livraison', ['class'=>'form-label']) }}
			{{ Form::text('reperage_livraison', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('ville', 'Ville', ['class'=>'form-label']) }}
			{{ Form::text('ville', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('province', 'Province', ['class'=>'form-label']) }}
			{{ Form::text('province', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('code_postal', 'Code_postal', ['class'=>'form-label']) }}
			{{ Form::text('code_postal', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('telephone', 'Telephone', ['class'=>'form-label']) }}
			{{ Form::text('telephone', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('reference_transfert', 'Reference_transfert', ['class'=>'form-label']) }}
			{{ Form::text('reference_transfert', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('date_commande', 'Date_commande', ['class'=>'form-label']) }}
			{{ Form::text('date_commande', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
