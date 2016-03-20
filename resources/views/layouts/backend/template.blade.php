<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ing. Jesus Maria Lobaton Escobar">


	<title>@yield('title', 'Reporte su pago') | SyS JM</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('../themes/bower_components/bootstrap/dist/css/bootstrap.css') !!}

    <!-- MetisMenu CSS -->
    {!! Html::style('../themes/bower_components/metisMenu/dist/metisMenu.min.css') !!}

    <!-- Timeline CSS -->
    {!! Html::style('../themes/dist/css/timeline.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('../themes/dist/css/sb-admin-2.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('../themes/bower_components/font-awesome/css/font-awesome.min.css') !!}


    {!! Html::style('../plugins/datepicker/css/datepicker.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js?ver=3.4.2" type="text/javascript"></script>

	{!! Html::style('css/estilo.css') !!}

<!-- link href="http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif:400,400italic,700italic" rel="stylesheet" type="text/css" -->

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('layouts.backend.nav')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('title')</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<!-- MENSAJES DEL SISTEMA -->
			    @include('flash::message')

			    <!-- MENSAJES DE ERRORDEL SISTEMA -->
			    @include('partials.errors')

                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

	@include('layouts.footer')
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
        {!! Html::script('../themes/bower_components/jquery/dist/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
        {!! Html::script('../themes/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

    <!-- Metis Menu Plugin JavaScript -->
        {!! Html::script('../themes/bower_components/metisMenu/dist/metisMenu.min.js') !!}

    <!-- Custom Theme JavaScript -->
        {!! Html::script('../themes/dist/js/sb-admin-2.js') !!}

        {!! Html::script('../plugins/datepicker/js/bootstrap-datepicker.min.js') !!}

        {!! Html::script('../plugins/moneda/jquery.price_format.min.js') !!}

<script src="/js/jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>

        <script>

    $('#datepicker').datepicker({
        format: "dd-mm-yyyy",
        maxViewMode: 1,
        clearBtn: true,
        language: "es",
        autoclose: true
    });
        </script>
</body>
</html>