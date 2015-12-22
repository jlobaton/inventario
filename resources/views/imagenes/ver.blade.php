@extends('layouts.template')

@section('title','Listado de Imagenes')

@section('content')
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
@endsection