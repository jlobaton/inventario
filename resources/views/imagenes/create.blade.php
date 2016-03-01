@extends('layouts.template')

@section('title','Agregar una Imagen')

@section('content')

	{!! Form::open(['route' => ['imagenes.store'], 'method' => 'POST' ,'class'=>"form-horizontal"]) !!}

		<div class="form-group">
			{!! Form::label('inventario_id','Inventario'); !!}
			{!! Form::select('inventario_id', $array_inventario, null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('codpro','Código'); !!}
			{!! Form::text('codpro',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Código del Producto', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('urlimagen','Descripción'); !!}
			{!! Form::text('urlimagen',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la URL de la Imagen Ej: http://www.seguridadsistema.com.ve/app/imagenes/', 'required']); !!}
		</div>
		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('imagenes.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

@endsection