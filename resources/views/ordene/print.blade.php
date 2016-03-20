@extends('layouts.template')

@section('title','Reporte de Productos por Enviar')

@section('content')
<div class="responsive">
<a title="imprimir" id="imprime"><span class="fa fa-print"></span></a>

<!-- div class='visible-print1' id="myPrintArea"-->
<div class="PrintArea" id="myPrintArea">
@foreach ($datos as $d)
	<div class="row">
		<h3><label>Datos del Envio:</label>  {{ $d->inventario->codpro." - ".$d->inventario->descr }}</h3>

		<ul>
			<li>
				<label>Nombre:</label> {{ $d->envcedula.' - '.$d->envnombre }}
			</li>
			<li>
				<label>Teléfono:</label> {{ $d->envtele }}
			</li>
			<li>
				<label>Dirección del Envio:</label> {{ $d->envdirec }}
			</li>
			<li>
				<label>Estado:</label> {{ $d->estado->desc }}
			</li>
			<li>
				<label>Ciudad:</label>{{ $d->ciudad->desc }}
			</li>
			<li>
				<label>Encomienda:</label> {{ $d->encomienda->nombre }}
			</li>
			<li>
				<label>Cantidad: </label> {{ $d->cantidad }}
			</li>
			<li>
				<label>Monto: </label> <span id='monto'>{{ $d->monto }}</span>
			</li>
			<li>
				<label>Mercancia Asegurdad ? </label>
			</li>
		</ul>
	</div>

@endforeach
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("#imprime").click(function () {
        $("div.PrintArea").printArea();
    });

	$('#monto').priceFormat({
	    prefix: 'Bs ',
	    centsSeparator: '.',
	    thousandsSeparator: ',',
	    centsLimit: 0
	});
});
</script>

@endsection