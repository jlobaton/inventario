@extends('layouts.template')

@section('title','Editar Producto <br>'.$datos->descr)

@section('content')

	{!! Form::open(['route' => ['inventario.update', $datos->id], 'method' => 'PUT', 'class'=>"form-horizontal"]) !!}

	  <div class="form-group">
		{!! Form::label('codigo','Código', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
		{!! Form::text('codpro',$datos->codpro, ['class' => 'form-control', 'placeholder' => 'Indique el Código', 'required']); !!}
		</div>
	  </div>

		<div class="form-group">
			{!! Form::label('descripcion','Descripción', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('descr',$datos->descr, ['class' => 'form-control', 'placeholder' => 'Indique la Descripción', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('video','Video', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('video', $array_video, $datos->video, ['class' => 'form-control', 'placeholder' => 'Indique la Cantidad de Canales de Salida HDMI/VGA/BNC', '']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('audio','Audio', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('audio',$datos->audio, ['class' => 'form-control', 'placeholder' => 'Indique la  ', '']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('resolucion','Resolución', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('resolucion',$datos->resolucion, ['class' => 'form-control', 'placeholder' => 'Indique la Resolución', '']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('almacenamiento','Almacenamiento', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('almacenamiento',$datos->almacenamiento, ['class' => 'form-control', 'placeholder' => 'Indique ', '']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('grabacion','Grabación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('grabacion',$datos->grabacion, ['class' => 'form-control', 'placeholder' => 'Indique la Forma de Grabación', '']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('general','Observación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::textarea('general',$datos->general, ['class' => 'form-control', 'placeholder' => 'Indique cualquier Observación', "rows"=> 2, '']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('exist','Existencia', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::number('exist',$datos->exist, ['class' => 'form-control', 'placeholder' => 'Indique la existencia', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('precio','Precio', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('precio',$datos->precio, ['class' => 'form-control', 'placeholder' => 'Indique el Precio de Venta', 'required']); !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('oferta','¿Este producto esta en Oferta?', ['class' => 'alert-danger col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::radio('oferta', '1', $datos->oferta) !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('oferta', '0', ($datos->oferta==0)? TRUE : FALSE) !!} No
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('estatus','¿Activar ?', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::radio('estatus', '1', $datos->estatus) !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('estatus', '0', ($datos->estatus==0)? TRUE : FALSE) !!} No
			</div>
		</div>

		<div class="form-group">
			<a class="btn btn-primary" href="{{ route('inventario.index') }}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}

<script type="text/javascript">
$(document).ready(function(){
	$('#precio').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: ',',
	    thousandsSeparator: '.',
	    centsLimit: 2
	});
});

</script>

@endsection