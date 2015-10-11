<!DOCTYPE html>
<html>
    <head>
        <title>Configuracion</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
				<tabla>
    				<fila> {{ "Estatus" }}</fila>
    				<fila> {{ "Titulo" }}</fila>
    				<fila> {{ "Mensaje" }}</fila>
    				<fila> {{ "url" }}</fila>
    				<fila> {{ "creado" }}</fila>
    				<fila> {{ "modificado" }}</fila>
				</tabla>
				 @if($datos)
                 @foreach ($datos as $datos)
                 <tabla>
    				<fila> {{ $datos->estatus }}</fila>
    				<fila> {{ $datos->titulo }}</fila>
    				<fila> {{ $datos->mensaje }}</fila>
    				<fila> {{ $datos->urlimg }}</fila>
    				<fila> {{ $datos->created_at }}</fila>
    				<fila> {{ $datos->created_at }}</fila>
    			</tabla>
				@endforeach
				@else
				{{ "NO EXISTEN DATOS" }}
				@endif

            </div>
        </div>
    </body>
</html>
