@extends('layouts.template')

@section('title','Editar Producto <br>'.$datos->descr)

@section('content')
	<div class="tabla_principalv2">
	{!! Form::open(['route' => ['inventario.update', $datos->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{!! Form::label('codigo','Código'); !!}
			{!! Form::text('codpro',$datos->codpro, ['class' => 'form-control', 'placeholder' => 'Indique el Código', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('descripcion','Descripción'); !!}
			{!! Form::text('descr',$datos->descr, ['class' => 'form-control', 'placeholder' => 'Indique la Descripción', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('video','Video'); !!}
			{!! Form::select('video', $array_video, $datos->video, ['class' => 'form-control', 'placeholder' => 'Indique la Cantidad de Canales de Salida HDMI/VGA/BNC', '']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('audio','Audio'); !!}
			{!! Form::text('audio',$datos->audio, ['class' => 'form-control', 'placeholder' => 'Indique la  ', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('resolucion','Resolución'); !!}
			{!! Form::text('resolucion',$datos->resolucion, ['class' => 'form-control', 'placeholder' => 'Indique la Resolución', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('almacenamiento','Almacenamiento'); !!}
			{!! Form::text('almacenamiento',$datos->almacenamiento, ['class' => 'form-control', 'placeholder' => 'Indique ', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('grabacion','Grabación'); !!}
			{!! Form::text('grabacion',$datos->grabacion, ['class' => 'form-control', 'placeholder' => 'Indique la Forma de Grabación', '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('general','Observación'); !!}
			{!! Form::textarea('general',$datos->general, ['class' => 'form-control', 'placeholder' => 'Indique cualquier Observación', "rows"=> 2, '']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('exist','Existencia'); !!}
			{!! Form::number('exist',$datos->exist, ['class' => 'form-control', 'placeholder' => 'Indique la existencia', 'required']); !!}
		</div>
		<div class="form-group">
			{!! Form::label('precio','Precio'); !!}
			{!! Form::number('precio',$datos->precio, ['class' => 'form-control', 'placeholder' => 'Indique el Precio de Venta', 'required']); !!}
		</div>

		<div class="form-group">
			{!! Form::label('oferta','¿Este producto esta en Oferta?', ['class' => 'alert-danger']); !!}
			{!! Form::radio('oferta', '1', $datos->oferta) !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('oferta', '0', ($datos->oferta==0)? TRUE : FALSE) !!} No
		</div>

		<div class="form-group">
			{!! Form::label('estatus','¿Activar ?', ['class' => '']); !!}
			{!! Form::radio('estatus', '1', $datos->estatus) !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('estatus', '0', ($datos->estatus==0)? TRUE : FALSE) !!} No
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('inventario.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
@endsection