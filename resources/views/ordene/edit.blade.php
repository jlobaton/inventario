@extends('layouts.template')

@section('title','Editar la Orden de '.$datos->nombre)

@section('content')

	<div class="tabla_principalv2 form-horizontal">
	{!! Form::open(['route' => ['ordene.update', $datos->id], 'method' => 'PUT', 'id' => 'formorden', 'name' => 'formorden']) !!}

<div class="panel panel-anaranja">
<div class="panel-heading">
	<h3 class="panel-title">Datos del Pago </h3>
</div>
	<div class="panel-body">

	  <div class="form-group">
	    {!! Form::label('nombre','Nombre', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('nombre',$datos->nombre, ['class' => 'form-control', 'placeholder' => 'Indique su Nombre Completo ', 'required']); !!}
	    </div>
	  </div>

	  <div class="form-group">
	    {!! Form::label('apellido','Apellido', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('apellido',$datos->apellido, ['class' => 'form-control', 'placeholder' => 'Indique su Apellido Completo ', 'required']); !!}
	    </div>
	  </div>

	  <div class="form-group">
	    {!! Form::label('seudonimo','Seudonimo', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('seudonimo',$datos->seudonimo, ['class' => 'form-control', 'placeholder' => 'Indique su seudonimo de Mercado Libre ']); !!}
	    </div>
	  </div>

		<div class="form-group">
			{!! Form::label('correo','Email', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('correo',$datos->correo, ['class' => 'form-control', 'placeholder' => 'Indique su Correo Electrónico', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('cantidad','Cantidad', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::number('cantidad',$datos->cantidad, ['class' => 'form-control', 'placeholder' => 'Indique la cantidad del Producto', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('inventario_id','Producto', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('inventario_id',$array_inventario, $datos->inventario_id,['class' => 'form-control', 'placeholder' => 'Seleccione su Producto', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('tipopago_id','Tipo de Pago', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('tipopago_id',$array_tp ,$datos->tipopago_id, ['class' => 'form-control', 'placeholder' => 'Seleccione el Tipo de Pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('bancorigen','Banco de Origen', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('bancorigen',$datos->bancorigen, ['class' => 'form-control', 'placeholder' => 'Indique el Banco que realizó el pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('banco_id','Banco Destino', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('banco_id', $array_banco ,$datos->banco_id, ['class' => 'form-control', 'placeholder' => 'Indique el Banco a donde realizó el pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('monto','Monto Cancelado', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('monto',$datos->monto, ['class' => 'form-control', 'placeholder' => 'Indique la monto de su pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('fecha','Fecha del Pago', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('fecha',$datos->fecha->format('d-m-Y'), ['id'=>'datepicker','class' => 'form-control', 'placeholder' => 'Indique la fecha del pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('obser','Observación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::textarea('obser',$datos->obser, ['class' => 'form-control', 'placeholder' => 'Observación General', "rows"=> 2,'']); !!}
			</div>
		</div>
	</div>
</div>

<div class="panel panel-anaranja">
<div class="panel-heading">
	<h3 class="panel-title">REGISTRATE !!! </h3>
</div>
	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('suscribir','¿Desea Suscribirse?', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::radio('suscribir', '1', $datos->suscribir ) !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('suscribir', '0', ($datos->suscribir==0)? TRUE : FALSE) !!} No
		</div>
		</div>

</div>
</div>

<div class="panel panel-anaranja">
<div class="panel-heading">
	<h3 class="panel-title">Datos del Envio </h3>
</div>
	<div class="panel-body">

		<div class="form-group">
			{!! Form::label('envnombre','Nombre Completo', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('envnombre',$datos->envnombre, ['class' => 'form-control', 'placeholder' => 'Indique el nombre completo de la persona quien va a retirar', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envcedula','Cédula', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('envcedula',$datos->envcedula, ['class' => 'form-control', 'placeholder' => 'Indique la Cédula de Identidad de la persona que va a retirar', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envtele','Teléfono', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('envtele',$datos->envtele, ['class' => 'form-control', 'placeholder' => 'Indique la teléfono de la persona que va a retirar', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('encomienda_id','Encomienda', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('encomienda_id', $array_encomienda, $datos->encomienda_id, ['class' => 'form-control', 'placeholder' => 'Indique la Encomienda', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envdirec','Dirección del Envío', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('envdirec',$datos->envdirec, ['class' => 'form-control', 'placeholder' => 'Indique la dirección exacta del envío', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('estado_id','Estado', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('estado_id',$array_estado, $datos->estado_id, ['class' => 'form-control', 'placeholder' => 'Indique el estado', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('ciudad_id','Ciudad', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('ciudad_id', $array_ciudad, $datos->ciudad_id, ['class' => 'form-control', 'placeholder' => 'Indique la Ciudad', 'required']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envobser','Observación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::textarea('envobser',$datos->envobser, ['class' => 'form-control', 'placeholder' => 'Observación General',"rows"=> 2]); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('seguro','Desea asegurar la Mercancia ?', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
				{!! Form::radio('seguro', '1', $datos->seguro ) !!} Si &nbsp;&nbsp;&nbsp;
				{!! Form::radio('seguro', '0', ($datos->seguro==0)? TRUE : FALSE) !!} No
			</div>
		</div>

</div>
</div>

<div class="rows">
	<div class="col-md-1">
			<a class="btn btn-primary" href="javascript:history.back()" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>
	</div>
	<div class="col-md-1">
		{!! Form::button('Guardar', ['class' => 'btn btn-success', 'id' => 'aceptar']) !!}
	</div>
</div>

	{!! Form::close() !!}
	</div>


<script type="text/javascript">
$(document).ready(function(){
	$('#monto').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: '.',
	    thousandsSeparator: ',',
	    centsLimit: 0
	});

	$( "#aceptar").click(function() {
		$('#monto').priceFormat({
		    prefix: '',
		    centsSeparator: '.',
		    thousandsSeparator: '',
		    centsLimit: 0
		});

		 $( "#formorden" ).submit();
		 return true;
	});
});
</script>
@endsection