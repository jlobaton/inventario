@extends('layouts.template')

@section('title','Listado de Imagenes')

@section('content')
<div class="table-responsive">

<a href="{{ route('imagenes.create') }}" class="btn btn-info boton" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>

{!! Form::open(['route' => 'imagenes.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group custom-search-form">
            {!! Form::text('buscar', $buscar, ['class'=> 'form-control', 'placeholder' => 'Buscar ...', 'aria-describedby' => 'search']) !!}
            <span class="input-group-btn"><button type="submit" class="btn btn-default" id='search'><i class="fa fa-search"></i></button></span>
        </div>
    {!! Form::close()!!}
<hr>

<div class="row">
    @foreach ($imagenes as $imag)
<div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
          <a href="#" class="thumbnailj">
            <img src="{{ $imag->urlimagen }}" WIDTH="250px" height="200px">
        </a>
      </div>
    </div>
</div>
    @endforeach
</div>

</div>

@endsection