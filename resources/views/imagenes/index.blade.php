@extends('layouts.template')

@section('title','Listado de las Imagenes')

@section('content')
<style type="text/css" media="screen">
.toolbar2 {
    float: left;
}
</style>
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
</div>

<table class="table table-striped table-bordered" id="users-table" width="100%">
    <thead>
        <tr>
            <td>{{ "Productos" }}</td>
            <td>{{ "Código" }}</td>
            <td>{{ "URL" }}</td>
            <td>{{ "Acción" }}</td>
        </tr>
    </thead>
</table>
<script type="text/javascript">
$(document).ready(function() {
    $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            order: [[ 1, "asc" ]],
            pagingType: "simple_numbers",
            ajax: '{!! route('imagenes.data') !!}',
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
            },
            columns: [
                { data: 'descr', name: 'inventario.descr' },
                { data: 'codpro', name: 'inv_imag.codpro' },
                { data: 'urlimagen', name: 'inv_imag.urlimagen' },
                { data: 'accion', name: 'accion' }

            ]
        });
});
</script>
@endsection