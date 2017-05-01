@extends('layouts.backend.template')

@section('title','Listado de Banco')

@section('content')

	<div class="tabla_principalv2 form-horizontal">
	    @if(!empty($datos[0]))
			<div class="row">
        	@foreach ($datos as $dato)
					<div class="col-md-4 ">
						<div class="well">
							<p><strong>Cuenta: </strong>{{ $dato->nombre }}</p>
							<p><strong>Nro: </strong>{{ $dato->nrocuenta }}</p>
							<p><strong>Titular: </strong>{{ $dato->beneficiario }}</p>
							<p><strong>Cédula: </strong>{{ $dato->cedula }}</p>
							<p><strong>Cuenta: </strong>{{ $dato->tipocuenta }}</p>
							<p><strong>Correo: </strong>{{ $dato->email }}</p>
						</div>
					</div>
			@endforeach
			</div>
		@endif
	</div>
@endsection