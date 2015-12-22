@extends('layouts.template')

@section('title','Bienvenido ...')

@section('content')
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{!! $count_inv !!}</div>
                                    <div>Productos</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('inventario.index') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{!! $count_ord !!}</div>
                                    <div>Orden de Pago</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('ordene.index') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{!! $count_ord_env !!}</div>
                                    <div>Ordenes Enviada</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
<div class="col-lg-8">
</div>
<div class="col-lg-4">

    <a class="twitter-timeline"  href="https://twitter.com/SyS_JM" data-widget-id="672994037905887232">Tweets por el @SyS_JM.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</div>
<hr>
<div class="col-lg">

<div class="panel-body">
<div class="text-center">
    <a class="btn btn-social-icon btn-dropbox" href=""><i class="fa fa-dropbox"></i></a>
    <a class="btn btn-social-icon btn-facebook" href=""><i class="fa fa-facebook"></i></a>
    <a class="btn btn-social-icon btn-github" href=""><i class="fa fa-github"></i></a>
    <a class="btn btn-social-icon btn-google-plus" href=""><i class="fa fa-google-plus"></i></a>
    <a class="btn btn-social-icon btn-instagram" href=""><i class="fa fa-instagram"></i></a>
    <a class="btn btn-social-icon btn-twitter" href=""><i class="fa fa-twitter"></i></a>
</div>
</div>
</div>
@endsection