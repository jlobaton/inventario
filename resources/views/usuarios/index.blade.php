@extends('layouts.template')

@section('title','Listado de Usuarios')

@section('content')
<div class="table-responsive">

<a href="{{ route('usuarios.create') }}" class="btn btn-info boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

    {!! Form::open(['route' => 'usuarios.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
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
            <td>{{ "Usuario" }}</td>
            <td>{{ "Correo" }}</td>
            <td>{{ "Tipo" }}</td>
            <td>{{ "Acciones" }}</td>
        </tr>
    </thead>
    <tbody>
        @if($datos)
        @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->name }}</td>
                <td>{{ $dato->email }}</td>
                <td>{{ $dato->tipo }}</td>
                <td class="acciones">
                    <a href="{{ route('usuarios.destroy', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    <a href="{{ route('usuarios.edit', $dato->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
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