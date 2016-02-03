<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/estilo.css') !!}

        <!-- Scripts -->
    {{-- {!! Html::script('http://code.jquery.com/jquery-1.11.3.js') !!} --}}
    <style type="text/css">

/*
    Note: It is best to use a less version of this file ( see http://css2less.cc
    For the media queries use @screen-sm-min instead of 768px.
    For .omb_spanOr use @body-bg instead of white.
*/

@media (min-width: 768px) {
    .omb_row-sm-offset-3 div:first-child[class*="col-"] {
        margin-left: 25%;
    }
}

.omb_login .omb_authTitle {
    text-align: center;
    line-height: 300%;
}

.omb_login .omb_socialButtons a {
    color: white; // In yourUse @body-bg
    opacity:0.9;
}
.omb_login .omb_socialButtons a:hover {
    color: white;
    opacity:1;
}
.omb_login .omb_socialButtons .omb_btn-facebook {background: #3b5998;}
.omb_login .omb_socialButtons .omb_btn-twitter {background: #00aced;}
.omb_login .omb_socialButtons .omb_btn-google {background: #c32f10;}


.omb_login .omb_loginOr {
    position: relative;
    font-size: 1.5em;
    color: #aaa;
    margin-top: 1em;
    margin-bottom: 1em;
    padding-top: 0.5em;
    padding-bottom: 0.5em;
}
.omb_login .omb_loginOr .omb_hrOr {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
}
.omb_login .omb_loginOr .omb_spanOr {
    display: block;
    position: absolute;
    left: 50%;
    top: -0.6em;
    margin-left: -1.5em;
    background-color: white;
    width: 3em;
    text-align: center;
}

.omb_login .omb_loginForm .input-group.i {
    width: 2em;
}
.omb_login .omb_loginForm  .help-block {
    color: red;
}

body {
    margin-top: 20px;
}

@media (min-width: 768px) {
    .omb_login .omb_forgotPwd {
        text-align: right;
        margin-top:10px;
    }
}
    </style>
</head>
<body>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif:400,400italic,700italic" rel="stylesheet" type="text/css">

<div class="container">

    <div class="omb_login">

        <center><img src="imagenes/logo.svg" alt="Seguridad y Sistema JM"  width="30%" /></center>
        <h3 class="omb_authTitle">INICIO DE SESIÓN</h3>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <!-- MENSAJES DEL SISTEMA -->
                @include('flash::message')

                <!-- MENSAJES DE ERRORDEL SISTEMA -->
                @include('partials.errors')

                {!! Form::open(['route' => ['login.store'], 'autocomplete'=>'off', 'method' => 'POST']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Usuario" id="username">
                    </div>
                    <span class="help-block"></span>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" class="form-control" name="password" id="password" placeholder="Clave">
                    </div>
                    <span class="help-block"></span>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-3">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me">Recordar Datos
                </label>
            </div>
            <div class="col-xs-12 col-sm-3">
                <p class="omb_forgotPwd">
                    <a href="#">Recuperar Clave</a>
                </p>
            </div>
        </div>
    </div>
        </div>
</body>

</html>