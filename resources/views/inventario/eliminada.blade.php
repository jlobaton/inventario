@extends('layouts.template')

@section('title','Listado de Productos - Eliminados')

@section('content')
<div class="table-responsive">

{!! Form::open(['route' => 'inventario.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class='input-group'>
            {!! Form::text('buscar', $buscar, ['class'=> 'form-control', 'placeholder' => 'Buscar ...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id='search'><span class="glyphicon glyphicon-search"  aria-hidden="true"></span></span>
        </div>
    {!! Form::close()!!}
<hr>

<div class="centrado">
<table class="table table-hover table-bordered table-striped">
    <thead class="eliminadas">
        <tr>
            <td>{{ "" }}</td>
            <td>{{ "Código" }}</td>
            <td>{{ "Descripción" }}</td>
            <td>{{ "Cant" }}</td>
            <td>{{ "Precio" }}</td>
            <td>{{ "Acción" }}</td>
        </tr>
    </thead>
    <tbody>
        @if($datos)
        @foreach ($datos as $dato)
            <tr>
                <td class="texto_centrado">
                    @if ($dato->oferta)<span class="glyphicon glyphicon-star" aria-hidden="true"></span>@endif
                    @if (!$dato->estatus)<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>@endif
                </td>

                <td>{{ $dato->codpro }}</td>
                <td>{{ $dato->descr }}</td>
                <td class="texto_centrado">{{ $dato->exist }}</td>

                <td class="texto_derecha">{{ $dato->precio }}</td>
                <td class="acciones">
                    <a href="{{ route('inventario.restaurar', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Restaurarlo?')"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></a>

                    <a href="{{ route('inventario.edit', $dato->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
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