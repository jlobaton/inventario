@extends('layouts.template')

@section('title','Agregar un Banco')

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => 'banco.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('nombre','Nombre'); !!}
			{!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Indique el Nombre del Banco', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('nrocuenta','Nro de Cuenta'); !!}
			{!! Form::text('nrocuenta',null, ['class' => 'form-control', 'placeholder' => 'Indique el Número de Cuenta', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('tipocuenta','Tipo de Cuenta'); !!}
			{!! Form::text('tipocuenta',null, ['class' => 'form-control', 'placeholder' => 'Indique el Tipo de Cuenta', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('cedula','Cédula'); !!}
			{!! Form::text('cedula',null, ['class' => 'form-control', 'placeholder' => 'Indique la Cédula de Identidad', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('beneficiario','Beneficiario'); !!}
			{!! Form::text('beneficiario',null, ['class' => 'form-control', 'placeholder' => 'Indique el Beneficiario', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email'); !!}
			{!! Form::text('email',null, ['class' => 'form-control', 'placeholder' => 'Indique el Correo Electrónico', 'required']); !!}
		</div>
		<div class="form-group botonera" >
			<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success glyphicon glyphicon-save']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection