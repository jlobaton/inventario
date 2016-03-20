@extends('layouts.template')

@section('title','Enviar una Orden de Pago')

@section('content')
	<div class="tabla_principalv2 form-horizontal">
	{!! Form::open(['route' => ['ordene.store_compra'], 'method' => 'POST' ,'class'=>"form-horizontal"]) !!}

<div class="panel panel-anaranja">
<div class="panel-heading">
	<h3 class="panel-title"></h3>
</div>
	<div class="panel-body">

	  <div class="form-group">
	    {!! Form::label('nombre','Nombre', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('nombre','', ['class' => 'form-control','required']); !!}
	    </div>
	  </div>

	  <div class="form-group">
	    {!! Form::label('apellido','Apellido', ['class' => 'col-sm-2 control-label']); !!}
	    <div class="col-sm-10">
	      {!! Form::text('apellido','', ['class' => 'form-control']); !!}
	    </div>
	  </div>
		<div class="form-group">
			{!! Form::label('correo','Email', ['class' => 'col-sm-2 control-label']); !!}
			<div class="col-sm-10">
			{!! Form::text('correo','', ['class' => 'form-control', 'required']); !!}
			</div>
		</div>
	</div>
</div>
</div>
			{!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
	</div>
</script>
@endsection