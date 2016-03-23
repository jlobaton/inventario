@extends('layouts.template')

@section('title','Listado de las Ordenes Enviadas')

@section('content')
<div class="table-responsive">
{!! Form::open(['route' => 'ordene.enviado', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class='input-group'>
            {!! Form::text('buscar', $buscar, ['class'=> 'form-control', 'placeholder' => 'Buscar ...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id='search'><span class="glyphicon glyphicon-search"  aria-hidden="true"></span></span>
        </div>
    {!! Form::close()!!}
<hr>

<br><br>
<div class="centrado">
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <td width="190px">{{ "Nro Guia" }}</td>
            <td width="190px">{{ "Cliente" }}</td>
            <td>{{ "Producto" }}</td>
            <td width="100px">{{ "Fecha" }}</td>
            <td width="90px">{{ "Estatus" }}</td>
            <td width="150px">{{ "Acción" }}</td>
        </tr>
    </thead>
    <tbody>
        @if(!empty($datos[0]))
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato->nroguia }}</td>
                    <td>{{ $dato->ordenes->nombre." ".$dato->ordenes->apellido }}</td>
                    <td>{{ $dato->ordenes->inventario->descr }}</td>

                    <td class="texto_centrado">{{ $dato->fecha->format('d-m-Y') }}</td>
                    <td class="">{{ $dato->ordenes->estatus }}</td>

                    <td class="acciones">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ route('ordene.showpago',$dato->id) }}"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span> Ver Pago </a> </li>
                            <li><a href="{{ route('ordene.imprimirorden',$dato->id) }}"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir </a> </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('ordene.edit', $dato->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar </a></li>
                            <li><a href="{{ route('ordene.destroyenviado', $dato->id) }}" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar </a></li>
                          </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">
                    <center>{{ "NO EXISTEN DATOS" }}</center>
                </td>
            </tr>
        @endif

    </tbody>
</table>
    <div class="text-center">
        {!! $datos->render() !!}
    </div>
</div>
</div>
@endsection