@extends('layouts.template')

@section('title','Listado de Configuracion')

@section('content')
<div class="table-responsive">

<a href="{{ route('configuracion.create') }}" class="btn btn-success boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

{!! Form::open(['route' => 'configuracion.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
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
            <td>{{ "Estatus" }}</td>
            <td>{{ "Titulo" }}</td>
            <td>{{ "Mensaje" }}</td>
            <td>{{ "url" }}</td>
            <td>{{ "Modificado" }}</td>
            <td>{{ "Acciones" }}</td>
        </tr>
    </thead>
    <tbody>
        @if($datos)
        @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->estatus }}</td>
                <td>{{ $dato->titulo }}</td>
                <td>{{ $dato->mensaje }}</td>
                <td>{{ $dato->urlimg }}</td>
                <td>{{ $dato->updated_at }}</td>
                <td class="acciones">
                    <a href="{{ route('configuracion.destroy', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    <a href="{{ route('configuracion.edit', $dato->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
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