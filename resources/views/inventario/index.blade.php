@extends('layouts.template')

@section('title','Listado de Productos')

@section('content')

<a href="{{ route('inventario.create') }}" class="btn btn-success boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

{!! Form::open(['route' => 'inventario.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
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
            <td>{{ "" }}</td>
            <td>{{ "Código" }}</td>
            <td>{{ "Descripción" }}</td>
            <td>{{ "Cant" }}</td>
            <td>{{ "Precio" }}</td>
            <td>{{ "Acción" }}</td>
        </tr>
    </thead>
    <tbody>
        @if(!empty($datos[0]))
        @foreach ($datos as $dato)
            <tr>
                <td class="texto_centrado">
                    @if ($dato->oferta)<span class="glyphicon glyphicon-star" aria-hidden="true"></span>@endif
                    @if (!$dato->estatus)<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>@endif
                </td>
                <td>{{ $dato->codpro }}</td>
                <td>{{ $dato->descr }}</td>
                <td class="texto_centrado">{{ $dato->exist }}</td>

                <td class="texto_derecha">{{ number_format($dato->precio,2,',','.') }}</td>
                <td class="acciones">
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ route('inventario.cambiaroferta',$dato->id) }}"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Oferta </a> </li>

                        <li><a href="{{ route('inventario.cambiarestatus',$dato->id) }}"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span> Ocultar </a> </li>

                        <li role="separator" class="divider"></li>

                        <li><a href="{{ route('inventario.edit', $dato->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar </a></li>

                        <li><a href="{{ route('inventario.destroy', $dato->id) }}" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar </a></li>
                      </ul>
                    </div>
                </td>

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
@endsection