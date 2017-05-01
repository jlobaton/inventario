@extends('layouts.template')

@section('title','Agregar una Imagen')

@section('content')
	<div class="tabla_principalv2 form-horizontal">

	{!! Form::open(['route' => ['imagenes.store'], 'method' => 'POST' ,'class'=>"form-horizontal" ,'files' => true, 'enctype'=>'multipart/form-data']) !!}

<div class="panel panel-anaranja">
	<div class="panel-heading">
		<h3 class="panel-title"></h3>
	</div>
	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('inventario_id','Inventario'); !!}
			{!! Form::select('inventario_id', $array_inventario, null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}
		</div>
		<!-- div class="form-group">
			{!! Form::label('codpro','Código'); !!}
			{!! Form::text('codpro',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Código del Producto', 'required']); !!}
		</div -->
		<!-- div class="form-group">
			{!! Form::label('urlimagen','Descripción'); !!}
			{!! Form::text('urlimagen',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la URL de la Imagen Ej: http://www.seguridadsistema.com.ve/app/imagenes/', 'required']); !!}
		</div -->

	    <div class='form-group'>
	    	{!! Form::label('urlimagen','Selecione una imagen'); !!}
	        {!! Form::file('urlimagen',null); !!}
	    </div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('imagenes.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

</div>

	{!! Form::close() !!}


</div>

@endsection