@extends('layouts.template')

@section('title','Editar el Banco '.$datos->nombre)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['banco.update', $datos->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre','Nombre'); !!}
			{!! Form::text('nombre',$datos->nombre, ['class' => 'form-control', 'placeholder' => 'Indique el Nombre del Banco', 'required']); !!}
		</div>
			{!! Form::label('nrocuenta','Nro de Cuenta'); !!}
			{!! Form::text('nrocuenta',$datos->nrocuenta, ['class' => 'form-control', 'placeholder' => 'Indique el Número de Cuenta', 'required']); !!}
		<div class="form-group">
			{!! Form::label('tipocuenta','Tipo de Cuenta'); !!}
			{!! Form::text('mensaje',$datos->tipocuenta, ['class' => 'form-control', 'placeholder' => 'Indique el Tipo de Cuenta', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('cedula','Cédula'); !!}
			{!! Form::text('cedula',$datos->cedula, ['class' => 'form-control', 'placeholder' => 'Indique la Cédula de Identidad', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('beneficiario','Beneficiario'); !!}
			{!! Form::text('beneficiario',$datos->beneficiario, ['class' => 'form-control', 'placeholder' => 'Indique el Beneficiario', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email'); !!}
			{!! Form::text('email',$datos->email, ['class' => 'form-control', 'placeholder' => 'Indique el Correo Electrónico', 'required']); !!}
		</div>
		<div class="form-group">
			<a class="btn btn-primary" href="{{ redirect()->back() }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection