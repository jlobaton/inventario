<!DOCTYPE html>
<html>
    <head>
        <title>SyS JM - @yield('titulo')</title>
        @section('cabecera')
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
            <link href="https://fonts.googleapis.com/css?family=Lato:10" rel="stylesheet" type="text/css">

        @show
    </head>
    <body>

        <div class="container">
            <div class="menu">
                @section('menu')
                    This is the master sidebar.
                @show
            </div>
            <div class="content">
                <div>@yield('contenido')</div>
            </div>
        </div>
        <div class="footer">
            @yield('pie')
        </div>
    </body>
</html>