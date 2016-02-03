@extends('layouts.template')

@section('title','Agregar un Usuario')

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre de Usuario'); !!}
			{!! Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Indique el Nombre de Usuario', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo'); !!}
			{!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña'); !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('tipo','Tipo de Cuenta'); !!}
			{!! Form::select('tipo',[''=>'Seleccione un Nivel','usuario'=> 'Usuario','admin'=> 'Administrador'],null, ['class' => 'form-control',  'required']); !!}
		</div>


		<div class="form-group botonera" >
			<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success glyphicon glyphicon-save']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection