@extends('layouts.template')

@section('title','Listado de las Ordenes')

@section('content')
<div class="table-responsive">

<a href="{{ route('ordene.create') }}" class="btn btn-info boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

{!! Form::open(['route' => 'ordene.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

<div class="input-group">
    <a href="{{ route('ordene.reporteporenviar') }}" class="btn"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
</div>

<div class="input-group custom-search-form">
    {!! Form::text('buscar', $buscar, ['class'=> 'form-control', 'placeholder' => 'Buscar ...', 'aria-describedby' => 'search']) !!}
    <span class="input-group-btn"><button type="submit" class="btn btn-default" id='search'><i class="fa fa-search"></i></button></span>
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
        @if(!empty($datos))
        @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->nombre." ".$dato->apellido }}</td>
                <td>{{ $dato->seudonimo }}</td>
                <td>{{ $dato->inventario->descr }}</td>

                <td class="texto_centrado">{{ $dato->fecha->format('d-m-Y') }}</td>
                <td class="">{{ $dato->estatus }}</td>

                <td class="acciones">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Acción <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
    <li><a href="#">Imprimir</a></li>
  </ul>
</div>

                    <div class="btn-group" role="group" aria-label="...">

                        <a href="{{ route('ordene.edit', $dato->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a href="{{ route('ordene.destroy', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        <a href="{{ route('ordene.enviar', $dato->id) }}" class="btn btn-warning"><span class="fa fa-truck" aria-hidden="true"></span></a>
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

<script type="text/javascript">
$(document).ready(function() {

});
</script>
@endsection


