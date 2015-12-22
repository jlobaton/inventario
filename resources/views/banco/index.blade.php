@extends('layouts.template')

@section('title','Listado de Banco')

@section('content')
<div class="table-responsive">

<a href="{{ route('banco.create') }}" class="btn btn-info boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

    {!! Form::open(['route' => 'banco.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
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
            <td>{{ "Nombre" }}</td>
            <td>{{ "Nro Cuenta" }}</td>
            <td>{{ "Tipo Cuenta" }}</td>
            <td>{{ "Acciones" }}</td>
        </tr>
    </thead>
    <tbody>
        @if($datos)
        @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->nombre }}</td>
                <td>{{ $dato->nrocuenta }}</td>
                <td>{{ $dato->tipocuenta }}</td>
                <td class="acciones">
                    <a href="{{ route('banco.destroy', $dato->id) }}" class="btn btn-danger" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    <a href="{{ route('banco.edit', $dato->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
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