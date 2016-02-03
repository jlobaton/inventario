@extends('layouts.template')

@section('title','Editar el usuario '.$datos->name)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['usuarios.update', $datos->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre de Usuario'); !!}
			{!! Form::text('name',$datos->name, ['class' => 'form-control', 'placeholder' => 'Indique el Nombre de Usuario', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('correo','Correo'); !!}
			{!! Form::email('correo',$datos->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña'); !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************', '']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('tipo','Tipo de Cuenta'); !!}
			{!! Form::select('tipo',[''=>'Seleccione un Nivel','usuario'=> 'Usuario','admin'=> 'Administrador'], $datos->tipo,  ['class' => 'form-control', 'required']); !!}
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ redirect()->back() }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection