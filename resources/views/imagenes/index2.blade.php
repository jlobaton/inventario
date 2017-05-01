@extends('layouts.template')

@section('title','Listado de las Imagenes')

@section('content')
<div class="table-responsive">

<div >
<a href="{{ route('imagenes.create') }}" class="btn btn-success boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

<a href="{{ route('imagenes.galeria') }}" class="btn btn-primary boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ir a Galeria</a>

{!! Form::open(['route' => 'imagenes.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
    <div class="pull-right input-group">
        {!! Form::text('buscar', $buscar, ['class'=> 'form-control', 'placeholder' => 'Buscar ...', 'aria-describedby' => 'search']) !!}
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button"  id='search'><i class="fa fa-search"></i></button>
      </span>
    </div>
{!! Form::close()!!}
</div>
<hr>
<div class="centrado">
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <td>{{ "Productos" }}</td>
            <td>{{ "Código" }}</td>
            <td>{{ "URL" }}</td>
            <td>{{ "Acción" }}</td>
        </tr>
    </thead>
    <tbody>
        @if(!empty($datos))
        @foreach ($datos as $dato)
            <tr>
                <td>{{ $dato->inventario->descr }}</td>
                <td>{{ $dato->codpro }}</td>
                <td>{{ $dato->urlimagen }}</td>

                <td class="acciones">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{{ route('imagenes.edit',$dato->id) }}"><span class="fa fa-truck" aria-hidden="true"></span> Ver Imagen</a> </li>

                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('imagenes.edit', $dato->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar </a></li>
                    <li><a href="{{ route('imagenes.destroy', $dato->id) }}" onclick="return confirm('Esta seguro que desea Eliminarlo?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar </a></li>
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

<table class="table table-bordered" id="users-table">
    <thead>
        <tr>
            <th>inventario_id</th>
            <th>codpro</th>
            <th>urlimagen</th>
        </tr>
    </thead>
</table>
<script type="text/javascript">
$(document).ready(function() {
/*
        $('#users-table').DataTable({a
            processing: true,
            serverSide: true,
            ajax: 'http://datatables.yajrabox.com/eloquent/basic-data'
        });*/

$('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('imagenes.data') !!}',
        columns: [
            { data: 'inventario_id', name: 'inventario_id' },
            { data: 'codpro', name: 'codpro' },
            { data: 'urlimagen', name: 'urlimagen' }
        ]
    });

});



</script>
@endsection