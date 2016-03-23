@extends('layouts.template')

@section('title','Pago de '.$datos->nombre)

@section('content')

	<div class="tabla_principalv2 form-horizontal">
	  <div class="form-group">
	    {!! Form::label('nombre','Nombre', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">{{ $datos->nombre }}
	    </div>
	  </div>

	  <div class="form-group">
	    {!! Form::label('apellido','Apellido', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">{!! $datos->apellido !!}</div>
	  </div>
		<div class="form-group">
			{!! Form::label('cantidad','Cantidad', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->cantidad !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('inventario_id','Producto', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->inventario->descr !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('tipopago_id','Tipo de Pago', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->tipopago_id !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('bancorigen','Banco de Origen', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->bancorigen !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('banco_id','Banco Destino', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->banco->nombre !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('monto','Monto Cancelado', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10" id="monto">{!! $datos->monto !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('fecha','Fecha del Pago', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->fecha->format('d-m-Y') !!}</div>
		</div>
		<div class="form-group">
			{!! Form::label('obser','Observación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">{!! $datos->obser !!}</div>
		</div>
		<div class="form-group">
			<a class="btn btn-primary" href="javascript:history.back()" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>

		</div>
	</div>

<script type="text/javascript">
$(document).ready(function(){
	$('#monto').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: '.',
	    thousandsSeparator: ',',
	    centsLimit: 0
	});

});
</script>
@endsection