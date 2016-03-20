@extends('layouts.backend.template')

@section('title','Crear una Orden')

@section('content')


	<div class="tabla_principalv2 form-horizontal">
	{!! Form::open(['route' => ['ordene.store'], 'method' => 'POST' ,'class'=>"form-horizontal"]) !!}

<div class="panel panel-anaranja">
<div class="panel-heading">
	<h3 class="panel-title">Datos del Pago </h3>
</div>
	<div class="panel-body">

	  <div class="form-group">
	    {!! Form::label('nombre','Nombre', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('nombre','', ['class' => 'form-control', 'placeholder' => 'nombre completo ', 'required']); !!}
	    </div>
	  </div>

	  <div class="form-group">
	    {!! Form::label('apellido','Apellido', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('apellido','', ['class' => 'form-control', 'placeholder' => 'apellido completo ', 'required']); !!}
	    </div>
	  </div>

	  <div class="form-group">
	    {!! Form::label('seudonimo','Seudonimo', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('seudonimo','', ['class' => 'form-control', 'placeholder' => 'seudonimo en Mercado Libre ']); !!}
	    </div>
	  </div>

		<div class="form-group">
			{!! Form::label('correo','Email', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('correo','', ['class' => 'form-control', 'placeholder' => 'correo electrónico', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('cantidad','Cantidad', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::number('cantidad','', ['class' => 'form-control', 'placeholder' => 'cantidad de producto ', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('inventario_id','Producto', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('inventario_id',$datos,'',['class' => 'form-control', 'placeholder' => 'Seleccione', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('tipopago_id','Tipo de Pago', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('tipopago_id',$array_tp ,'', ['class' => 'form-control', 'placeholder' => 'Seleccione', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('bancorigen','Banco de Origen', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('bancorigen','', ['class' => 'form-control', 'placeholder' => 'banco que realizó el pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('banco_id','Banco Destino', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('banco_id', $array_banco ,'', ['class' => 'form-control', 'placeholder' => 'banco a donde realizó el pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('monto','Monto Cancelado', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('monto','', ['class' => 'form-control', 'placeholder' => 'monto de su pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('fecha','Fecha del Pago', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('fecha',date('d-m-Y'), ['id'=>'datepicker', 'class' => 'form-control', 'placeholder' => 'fecha del pago', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('obser','Observación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::textarea('obser','', ['class' => 'form-control', 'placeholder' => 'observación general', "rows"=> 2,'']); !!}
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
			{!! Form::label('estatus','¿Desea recibir nuestras Lista de Precio por correo?', ['class' => 'col-sm-2 control-label']); !!}
		<div class="col-sm-10">
			{!! Form::radio('estatus', '1') !!} Si &nbsp;&nbsp;&nbsp;
			{!! Form::radio('estatus', '0') !!} No
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
			{!! Form::text('envnombre','', ['class' => 'form-control', 'placeholder' => 'nombre completo de la persona quien va a retirar', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envcedula','Cédula', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('envcedula','', ['class' => 'form-control', 'placeholder' => 'cédula de identidad de la persona que va a retirar', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envtele','Teléfono', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('envtele','', ['class' => 'form-control', 'placeholder' => 'teléfono de la persona que va a retirar', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('encomienda_id','Encomienda', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('encomienda_id', $array_encomienda, '', ['class' => 'form-control', 'placeholder' => 'Seleccione', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envdirec','Dirección del Envío', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::textarea('envdirec','', ['class' => 'form-control', 'placeholder' => 'dirección exacta del envío', 'required', 'rows'=> 2]); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('estado_id','Estado', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('estado_id',$array_estado, '', ['class' => 'form-control', 'placeholder' => 'Seleccione', 'required']); !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('ciudad_id','Ciudad', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::select('ciudad_id', $array_ciudad, '', ['class' => 'form-control', 'placeholder' => 'Seleccione', 'required']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('envobser','Observación', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::textarea('envobser','', ['class' => 'form-control', 'placeholder' => 'observación general',"rows"=> 2]); !!}
			</div>
		</div>
	</div>
</div>
			{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#monto').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: ',',
	    thousandsSeparator: '.',
	    centsLimit: 2
	});
});
</script>
@endsection