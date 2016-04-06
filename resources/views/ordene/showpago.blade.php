@extends('layouts.template')

@section('title','Pago de '.$datos->nombre)

@section('content')

<div class="responsive">

<div class="rows">
	<div class="col-sm-10">
			<a class="btn btn-primary" href="javascript:history.back()" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>
			<a class="btn btn-info " href='javascript:$("div.PrintArea").printArea()'  role="button"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir</a>
	</div>
</div>

<div class="PrintArea" id="myPrintArea">

	<div class="row">
	<div class="col-sm-10">
	<h3><label>Datos del Pago:</label></h3>
		<ul>
			<li>
				<label>Nombre:</label> {{ $datos->nombre }}
			</li>

			<li>
				<label>Apellido:</label> {{ $datos->apellido }}
			</li>
			<li>
				<label>Cantidad:</label> {{ $datos->cantidad }}
			</li>
			<li>
				<label>Producto:</label> {{ $datos->inventario->descr }}
			</li>
			<li>
				<label>Banco Origen: </label> {{ $datos->bancorigen }}
			</li>
			<li>
				<label>Banco Destino: </label> {{ $datos->banco->nombre }}
			</li>
			<li>
				<label>Monto Cancelado: </label> {{ number_format($datos->monto,2,',','.') }}
			</li>
			<li>
				<label>Fecha de Pago: </label> {{ $datos->fecha->format('d-m-Y') }}
			</li>
			<li>
				<label>Observación: </label> {{ $datos->obser }}
			</li>
		</ul>
	</div>
	</div>
</div>

<div class="rows">
	<div class="col-sm-10">
			<a class="btn btn-primary" href="javascript:history.back()" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>
			<a class="btn btn-info " href='javascript:$("div.PrintArea").printArea()'  role="button"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir</a>
	</div>
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