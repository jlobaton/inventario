@extends('layouts.template')

@section('title', 'Agregar una Encomienda')

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => 'encomienda.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre','Nombre'); !!}
			{!! Form::text('nombre',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Nombre de la Encomienda', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('observacion','Observacion'); !!}
			{!! Form::text('observacion',NULL, ['class' => 'form-control', 'placeholder' => 'Indique cualquier Observación', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('urltracking','Url Tracking'); !!}
			{!! Form::text('urltracking',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Url del Tracking', 'required']); !!}
		</div>

		<div class="form-group botonera">
			<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection
