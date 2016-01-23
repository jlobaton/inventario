@extends('layouts.template')

@section('title','Envio de la Orden '. $datos->envnombre)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['ordene.updatenviar'], 'method' => 'POST']) !!}

		{!! Form::hidden('id',$datos->id); !!}
		<div class="form-group">
			{!! Form::label('fecha','Fecha del Envio'); !!}
			{!! Form::text('fecha', date('d-m-Y'), ['class' => 'form-control', 'placeholder' => 'Indique la fecha del envio', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('nroguia','Nro Guia'); !!}
			{!! Form::text('nroguia',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Numero de la Guia', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('encomienda_id','Encomienda'); !!}
			{!! Form::select('encomienda_id', $array_encomienda, $datos->encomienda_id, ['class' => 'form-control', 'placeholder' => 'Indique la Encomienda', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('envdirec','Dirección del Envío'); !!}
			{!! Form::text('envdirec',$datos->envdirec, ['class' => 'form-control', 'placeholder' => 'Indique la dirección exacta del envío', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado_id','Estado'); !!}
			{!! Form::select('estado_id',$array_estado, $datos->estado_id, ['class' => 'form-control', 'placeholder' => 'Indique el estado', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('ciudad_id','Ciudad'); !!}
			{!! Form::select('ciudad_id', $array_ciudad, $datos->ciudad_id, ['class' => 'form-control', 'placeholder' => 'Indique la Ciudad', 'required']) !!}

		</div>
		<div class="form-group">
			{!! Form::label('envobser','Observación'); !!}
			{!! Form::text('envobser',$datos->envobser, ['class' => 'form-control', 'placeholder' => 'Observación General']); !!}
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ redirect()->back() }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection