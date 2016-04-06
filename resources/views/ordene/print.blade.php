@extends('layouts.template')

@section('title','Reporte de Productos por Enviar')

@section('content')
<div class="responsive">
<div class="rows">
	<div class="col-sm-10">
			<a class="btn btn-primary" href="javascript:history.back()" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>
			<a class="btn btn-info " href='javascript:$("div.PrintArea").printArea()'  role="button"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir</a>
	</div>
</div>

<!-- div class='visible-print1' id="myPrintArea"-->
<div class="PrintArea" id="myPrintArea">

@if ($estatus == 2)
@foreach ($datos as $d)
	<div class="row">
	<div class="col-sm-10">
		<h3><label>Datos del Envio:</label>  {{ $d->inventario->codpro." - ".$d->inventario->descr }}</h3>

		<ul>
			<li>
				<label>Encomienda:</label> {{ $d->encomienda->nombre }}
			</li>

			<li>
				<label>CI/Nombre:</label> {{ $d->envcedula.' - '.$d->envnombre }}
			</li>
			<li>
				<label>Teléfono:</label> {{ $d->envtele }}
			</li>
			<li>
				<label>Dirección del Envio:</label> {{ $d->envdirec ." - Edo. ".$d->estado->desc." - ".$d->ciudad->desc }}
			</li>
			<li>
				<label>Cantidad: </label> {{ $d->cantidad }}
			</li>
			<li>
				<label>Monto: </label> <span id='monto2'>{{ number_format($d->monto,2,',','.') }}</span>
			</li>
			<li>
				<label>Mercancia Asegurdad ? </label> {{ ($d->seguro) ? 'SI' : 'NO' }}
			</li>
		</ul>
	</div>
	</div>


@endforeach
@else
	<div class="row">
	<div class="col-sm-10">

		<h3><label>Datos del Envio:</label>  {{ $datos->inventario->codpro." - ".$datos->inventario->descr }}</h3>

		<ul>
			<li>
				<label>Encomienda:</label> {{ $datos->encomienda->nombre }}
			</li>
			<li>
				<label>CI/Nombre:</label> {{ $datos->envcedula.' - '.$datos->envnombre }}
			</li>
			<li>
				<label>Teléfono:</label> {{ $datos->envtele }}
			</li>
			<li>
				<label>Dirección del Envio:</label> {{ $datos->envdirec ." - Edo. ".$datos->estado->desc." - ".$datos->ciudad->desc }}
			</li>
			<li>
				<label>Cantidad: </label> {{ $datos->cantidad }}
			</li>
			<li>
				<label>Monto: </label> <span id='monto2'>{{ number_format($datos->monto,2,',','.') }}</span>
			</li>
			<li>
				<label>Mercancia Asegurada ? </label> {{ ($datos->seguro) ? 'SI' : 'NO' }}
			</li>
		</ul>
	</div>
	</div>

@endif
</div>

<div class="rows">
	<div class="col-sm-10">
			<a class="btn btn-primary" href="javascript:history.back()" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Atras</a>
			<a class="btn btn-info " href='javascript:$("div.PrintArea").printArea()'  role="button"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir</a>
	</div>
</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#monto').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: '.',
	    thousandsSeparator: ',',
	    centsLimit: 0
	});

    //$("#imprime").click(function () {
        //$("div.PrintArea").printArea();
    //});

});
</script>

@endsection