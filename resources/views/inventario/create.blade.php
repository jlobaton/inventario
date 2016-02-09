@extends('layouts.template')

@section('title','Agregar un Producto')

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['inventario.store'], 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('codigo','Código'); !!}
			{!! Form::text('codpro',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Código', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion','Descripción'); !!}
			{!! Form::text('descr',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Descripción', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('video','Video'); !!}
			{!! Form::select('video', $array_video, NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Cantidad de Canales de Salida HDMI/VGA/BNC', '']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('audio','Audio'); !!}
			{!! Form::text('audio',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la  ', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('resolucion','Resolución'); !!}
			{!! Form::text('resolucion',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Resolución', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('almacenamiento','Almacenamiento'); !!}
			{!! Form::text('almacenamiento',NULL, ['class' => 'form-control', 'placeholder' => 'Indique ', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('grabacion','Grabación'); !!}
			{!! Form::text('grabacion',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la Forma de Grabación', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('general','Observación'); !!}
			{!! Form::textarea('general',NULL, ['class' => 'form-control', 'placeholder' => 'Indique cualquier Observación', "rows"=> 2, '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('exist','Existencia'); !!}
			{!! Form::number('exist',NULL, ['class' => 'form-control', 'placeholder' => 'Indique la existencia', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('precio','Precio'); !!}
			{!! Form::number('precio',NULL, ['class' => 'form-control', 'placeholder' => 'Indique el Precio de Venta', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('oferta','¿Este producto esta en Oferta?', ['class' => 'alert-danger']); !!}
			&nbsp;&nbsp;
			{!! Form::radio('oferta', '1') !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('oferta', '0') !!} No
		</div>

		<div class="form-group">
			{!! Form::label('estatus','¿Activar ?', ['class' => '']); !!}
			{!! Form::radio('estatus', '1') !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('estatus', '0') !!} No
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('inventario.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection