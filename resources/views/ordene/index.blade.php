@extends('layouts.template')

@section('title','Listado de las Ordenes')

@section('content')
<div class="table-responsive">

<a href="{{ route('ordene.create') }}" class="btn btn-info boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

{!! Form::open(['route' => 'ordene.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class='input-group'>
            {!! Form::text('buscar', $buscar, ['class'=> 'form-control', 'placeholder' => 'Buscar ...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id='search'><span class="glyphicon glyphicon-search"  aria-hidden="true"></span></span>
        </div>
    {!! Form::close()!!}
<hr>

<div class="centrado">
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <td width="190px">{{ "Cliente" }}</td>
            <td width="120px">{{ "Seudonimo" }}</td>
            <td>{{ "Producto" }}</td>
            <td width="100px">{{ "Fecha" }}</td>
            <td width="90px">{{ "Estatus" }}</td>
            <td width="150px">{{ "Acción" }}</td>
        </tr>
    </thead>
    <tbody>
        @if($datos)
        @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->nombre." ".$dato->apellido }}</td>
                <td>{{ $dato->seudonimo }}</td>
                <td>{{ $dato->inventario->descr }}</td>

                <td class="texto_centrado">{{ $dato->fecha->format('d-m-Y') }}</td>
                <td class="">{{ $dato->estatus }}</td>

                <td class="acciones">
                    <a href="{{ route('ordene.destroy', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    <a href="{{ route('ordene.edit', $dato->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

                    <a href="{{ route('ordene.enviar', $dato->id) }}" class="btn btn-info"><span class="fa fa-truck" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        @else
            {{ "NO EXISTEN DATOS" }}
        @endif

    </tbody>
</table>
    <div class="text-center">
        {!! $datos->render() !!}
    </div>
</div>
</div>
@endsection