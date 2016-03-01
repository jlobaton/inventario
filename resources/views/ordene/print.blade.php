@extends('layouts.template')

@section('title','Reporte de Productos por Enviar')

@section('content')
<div class="responsive">
<a href="javascript:print();" title="imprimir"><span class="fa fa-print"></span></a>
<div class='visible-print'>
@foreach ($datos as $d)

	<div class="row">
		<h3><label>Datos del Envio:</label>  {{ $d->inventario->codpro." - ".$d->inventario->descr }}</h3>
		<ul>
			<li>
				<label>Nombre:</label> {{ $d->envnombre }}
			</li>
			<li>
				<label>Cedula:</label> {{ $d->envcedula }}
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
				<label>Mercancia Asegurdad ? </label>
			</li>
		</ul>
	</div>
</div>
@endforeach
</div>

@endsection