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
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="{{ route('ordene.edit', $dato->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="{{ route('ordene.destroyenviado', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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