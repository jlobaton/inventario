@extends('layouts.template')

@section('title','Editar Encomienda '.$datos->nombre)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['encomienda.update', $datos->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre','Nombre'); !!}
			{!! Form::text('nombre',$datos->nombre, ['class' => 'form-control', 'placeholder' => 'Indique el Nombre de la Encomienda', 'required']); !!}
		</div>
			{!! Form::label('observacion','Observacion'); !!}
			{!! Form::text('observacion',$datos->observacion, ['class' => 'form-control', 'placeholder' => 'Indique cualquier Observación', 'required']); !!}
		<div class="form-group">
			{!! Form::label('urltracking','Url Tracking'); !!}
			{!! Form::text('urltracking',$datos->urltracking, ['class' => 'form-control', 'placeholder' => 'Indique el Url del Tracking', 'required']); !!}
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('encomienda.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection