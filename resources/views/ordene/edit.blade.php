@extends('layouts.template')

@section('title','Editar la Orden de '.$datos->nombre)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['banco.update', $datos->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('nombre','Nombre'); !!}
			{!! Form::text('nombre',$datos->nombre, ['class' => 'form-control', 'placeholder' => 'Indique su Nombre Completo ', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('apellido','Apellido'); !!}
			{!! Form::text('apellido',$datos->apellido, ['class' => 'form-control', 'placeholder' => 'Indique su Apellido Completo ', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('seudonimo','Seudonimo'); !!}
			{!! Form::text('seudonimo',$datos->seudonimo, ['class' => 'form-control', 'placeholder' => 'Indique su seudonimo de Mercado Libre ']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email'); !!}
			{!! Form::text('email',$datos->correo, ['class' => 'form-control', 'placeholder' => 'Indique su Correo Electrónico', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('cantidad','Cantidad'); !!}
			{!! Form::number('cantidad',$datos->cantidad, ['class' => 'form-control', 'placeholder' => 'Indique la cantidad del Producto', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('inventario_id','Producto'); !!}
			{!! Form::text('inventario_id',$datos->inventario->descr, ['class' => 'form-control', 'placeholder' => 'Seleccione su Producto', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('tipopago_id','Tipo de Pago'); !!}
			{!! Form::text('tipopago_id',$datos->tipopago_id, ['class' => 'form-control', 'placeholder' => 'Seleccione el Tipo de Pago', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('bancorigen','Banco de Origen'); !!}
			{!! Form::text('bancorigen',$datos->bancorigen, ['class' => 'form-control', 'placeholder' => 'Indique el Banco que realizó el pago', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('banco_id','Banco Destino'); !!}
			{!! Form::text('banco_id',$datos->banco->nombre, ['class' => 'form-control', 'placeholder' => 'Indique el Banco a donde realizó el pago', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('monto','Monto Cancelado'); !!}
			{!! Form::number('monto',$datos->monto, ['class' => 'form-control', 'placeholder' => 'Indique la monto de su pago', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('obser','Observación'); !!}
			{!! Form::text('obser',$datos->obser, ['class' => 'form-control', 'placeholder' => 'Observación General']); !!}
		</div>
		*** Datos del Envio
		<div class="form-group">
			{!! Form::label('envnombre','Nombre Completo'); !!}
			{!! Form::text('envnombre',$datos->envnombre, ['class' => 'form-control', 'placeholder' => 'Indique el nombre completo de la persona quien va a retirar', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('cedula','Cédula'); !!}
			{!! Form::text('cedula',$datos->cedula, ['class' => 'form-control', 'placeholder' => 'Indique la Cédula de Identidad de la persona que va a retirar', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('envtele','Teléfono'); !!}
			{!! Form::text('envtele',$datos->envtele, ['class' => 'form-control', 'placeholder' => 'Indique la teléfono de la persona que va a retirar', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('encomienda_id','Encomienda'); !!}
			{!! Form::text('encomienda_id',$datos->encomienda->nombre, ['class' => 'form-control', 'placeholder' => 'Indique la Encomienda', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('envdirec','Dirección del Envío'); !!}
			{!! Form::text('envdirec',$datos->envdirec, ['class' => 'form-control', 'placeholder' => 'Indique la dirección exacta del envío', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('estado_id','Estado'); !!}
			{!! Form::text('estado_id',$datos->estado, ['class' => 'form-control', 'placeholder' => 'Indique el estado', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('ciudad_id','Ciudad'); !!}
			{!! Form::text('ciudad_id',$datos->ciudad_id, ['class' => 'form-control', 'placeholder' => 'Indique la Ciudad', 'required']); !!}
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