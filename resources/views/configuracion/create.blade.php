@extends('layouts.template')

@section('title','Agregar una Configuración')

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => 'configuracion.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('estatus','Estatus', ['class' => 'control-label']); !!}
			&nbsp;&nbsp;&nbsp;
				{!! Form::radio('estatus', '1', true) !!} Si &nbsp;&nbsp;&nbsp;
				{!! Form::radio('estatus', '0') !!} No
		</div>
		<div class="form-group">
			{!! Form::label('estatus','Estatus'); !!}
			{!! Form::text('estatus',null, ['class' => 'form-control', 'placeholder' => 'Estatus', 'required']); !!}
		</div>
			{!! Form::label('titulo','Titulo'); !!}
			{!! Form::text('titulo',null, ['class' => 'form-control', 'placeholder' => 'Titulo del Mensaje', 'required']); !!}
		<div class="form-group">
			{!! Form::label('mensaje','Mensaje'); !!}
			{!! Form::text('mensaje',null, ['class' => 'form-control', 'placeholder' => 'Cuerpo del Mensaje', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('urlimg','Url Imagen'); !!}
			{!! Form::text('urlimg',null, ['class' => 'form-control', 'placeholder' => 'Url de la Imagen a Mostrar']); !!}
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('configuracion.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection