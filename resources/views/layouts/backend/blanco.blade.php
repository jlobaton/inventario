@extends('layouts.backend.template')

@section('title','')

@section('content')
<div class="container">
   <div class="row">
       <div class="col col-md-6 col-md-offset-3"   >
           <div class="panel panel-default">
             <div class="panel-heading"><h3 class="panel-title">Gracias por su Pago !!!</h3></div>
             <div class="panel-body">
               <h4>Tu mensaje ha sido enviado, pronto responderemos a tu solicitud.</h4>
             </div>
             <div class="panel-footer">
                 <a href="{{ route('ordene.create') }}" class="btn btn-primary btn-xs">Volver</a>
               </div>
           </div>
        </div>
   </div>
</div>
@endsection