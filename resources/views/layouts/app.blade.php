<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Bienvenido') | SyS JM</title>

@section('cabecera')
	{!! Html::style('css/bootstrap.css') !!}
	{!! Html::style('css/estilo.css') !!}

		<!-- Scripts -->
	{!! Html::script('http://code.jquery.com/jquery-1.11.3.js') !!}

	{!! Html::script('js/bootstrap.min.js') !!}

@show
	<!-- Fonts -->
	<!-- link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,greek' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- BARRA DE MENU -->
	<div class="table-responsive">

	@include('layouts.nav')

	<div class="tabla_principal">
		<div class="centrado titulo ">
	    	@yield('title')
		</div>

		<!-- MENSAJES DEL SISTEMA -->
	    @include('flash::message')

	    <!-- MENSAJES DE ERRORDEL SISTEMA -->
	    @include('partials.errors')

	    <!-- CONTENIDO -->
		@yield('content')
	</div>

	</div>


@include('layouts.footer')
</body>
</html>