@extends('layouts.template')

@section('title','Migración de las Imagenes')

@section('content')
<br><br>
<div class="table-responsive">
{!! Form::open(['route' => ['migracion.saveimagenes'], 'method' => 'POST', 'files' => true, 'enctype'=>'multipart/form-data' ]) !!}
    <div class='form-group'>
    	{!! Form::label('archivo','Selecione un archivo para Migrar/Importar'); !!}
        {!! Form::file('archivo',null); !!}
    </div>

	<div class="form-group">
		{!! Form::label('borrar','Desea Borrar los datos de la tabla Imagenes, ante de la migración? '); !!}
		&nbsp;&nbsp;
		{!! Form::radio('borrar', '1') !!} Si &nbsp;&nbsp;&nbsp;
		{!! Form::radio('borrar', '0') !!} No
	</div>

    <div class="form-group">

		{!! Form::submit('Aceptar', ['class' => 'btn btn-success']) !!}
	</div>
{!! Form::close()!!}

</div>
@endsection