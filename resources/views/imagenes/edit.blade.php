@extends('layouts.template')

@section('title','Editar una Imagen')

@section('content')

	{!! Form::open(['route' => ['imagenes.update', $datos->id], 'method' => 'POST' ,'class'=>"form-horizontal" ,'files' => true, 'enctype'=>'multipart/form-data']) !!}

		<div class="form-group">
			{!! Form::label('inventario_id','Inventario'); !!}
			{!! Form::select('inventario_id', $array_inventario, $datos->inventario_id, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('codpro','Código'); !!}
			{!! Form::text('codpro',$datos->codpro, ['class' => 'form-control', 'placeholder' => 'Indique el Código del Producto', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('urlimagen2','URL Imagen'); !!}
			{!! Form::text('urlimagen2',$datos->urlimagen, ['class' => 'form-control', 'placeholder' => 'Indique la URL de la Imagen Ej: http://www.seguridadsistema.com.ve/app/imagenes/', 'required']); !!}
		</div>

	    <div class='form-group'>
	    	{!! Form::label('urlimagen','Selecione una imagen'); !!}
	        {!! Form::file('urlimagen',null); !!}
	    </div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('imagenes.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

@endsection