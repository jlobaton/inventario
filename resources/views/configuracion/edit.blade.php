@extends('layouts.template')

@section('title','Editar Configuración '.$datos->titulo)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['configuracion.update', $datos->id], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('estatus','Estatus', ['class' => 'control-label']); !!}
			&nbsp;&nbsp;&nbsp;
				{!! Form::radio('estatus', '1', $datos->estatus) !!} Si &nbsp;&nbsp;&nbsp;
				{!! Form::radio('estatus', '0', ($datos->estatus==0)? TRUE : FALSE) !!} No
		</div>
		<div class="form-group">
			{!! Form::label('titulo','Titulo'); !!}
			{!! Form::text('titulo',$datos->titulo, ['class' => 'form-control', 'placeholder' => 'Titulo del Mensaje', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('mensaje','Mensaje'); !!}
			{!! Form::text('mensaje',$datos->mensaje, ['class' => 'form-control', 'placeholder' => 'Cuerpo del Mensaje', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('urlimg','Url Imagen'); !!}
			{!! Form::text('urlimg',$datos->urlimg, ['class' => 'form-control', 'placeholder' => 'Url de la Imagen a Mostrar']); !!}
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('configuracion.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection