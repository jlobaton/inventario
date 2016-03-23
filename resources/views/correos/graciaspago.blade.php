<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
<style>
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857;
}
.thumbnail {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    display: block;
    line-height: 1.42857;
    margin-bottom: 20px;
    padding: 4px;
    transition: border 0.2s ease-in-out 0s;
}
a {
    color: #337ab7;
    text-decoration: none;
}
.col-md-6 {
    width: 50%;
}
.list-unstyled {
    list-style: outside none none;
    padding-left: 0;
}
.col-md-5 {
    width: 41.6667%;
}
ol, ul {
    margin-bottom: 10px;
    margin-top: 0;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
.container .jumbotron, .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
}
.container .jumbotron, .container-fluid .jumbotron {
    border-radius: 6px;
}
.jumbotron {
    padding-bottom: 48px;
    padding-top: 48px;
}
.jumbotron {
    background-color: #eee;
    color: inherit;
    margin-bottom: 30px;
}
.panel-body {
    padding: 15px;
}
label {
	font-weight: 700;
	max-width: 100%;
}

.panel-warning {
    border-color: #faebcc;
}
.panel {
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
}
.panel-warning > .panel-heading {
    background-color: #fcf8e3;
    border-color: #faebcc;
    color: #8a6d3b;
}
.panel-heading {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    padding: 10px 15px;
}
</style>


<div class="container-fluid">
	<div class="jumbotron">
	<div class="row">
		<div class="col-md-12">
			<img width="250px" height="95px" alt="" src="http://www.seguridadsistema.com.ve/imags/logo_top.png">
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<h2>{{ $datos->nombre }}, Gracias por su Pago...</h2>
			</div>
		</div>

<div class="panel panel-warning">
	<div class="panel-heading">
		<h3 class="panel-title"><label>Detalle para el Envio</label></h3>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6">
				<ul class="list-unstyled">
					<li><label>Fecha : </label> {{ $datos->fecha->format('d-m-Y') }}</li>
					<li><label>Enviar por : </label> {{ $datos->encomienda->nombre }}</li>
					<li><label>Dirección : </label> {{ $datos->envdirec }}	</li>
					<li><label>Producto : </label> {!! $datos->inventario->descr !!}</li>
					<li><label>Cantidad : </label> {{ $datos->cantidad }}</li>
				</ul>
			</div>

			<div class="col-md-5">
				<a href="#" class="thumbnail">
					<img class="img-rounded" src={{ $datos->inventario->inv_imag->urlimagen }} alt="">
				</a>
			</div>

	</div>

</div>

	</div>

		<div class="row">
			<div class="col-md-12" >
				<label class="text-center list-group-item list-group-item-warning" style="background-color: #fcf8e3;
    color: #8a6d3b;
    border: 1px solid #ddd;
    display: block;
    padding: 10px 15px;
    position: relative;
    text-align: center;
    font-weight: 700;
    max-width: 100%;"> Todo los derechos Reservados @ Seguridad y Sistema JM.
</label>
			</div>
		</div>

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>