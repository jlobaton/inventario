<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2" />

    <title>Seguridad y Sistema JM</title>
    <meta charset="utf-8">

  <link rel="stylesheet" href="css/themes/personal.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
<!-- link rel="stylesheet" href="js/jQueryMobile/jquery.mobile.theme-1.4.5.css" /-->
<!--link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" /-->
  <link rel="stylesheet" href="css/themes/jquery.mobile-1.4.5.css" />

  <link rel="stylesheet" href="css/themes/custom.css" />
  <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
  <!-- script src="js/jquery-1.11.1.min.js"></script -->
  <!-- script src="http://code.jquery.com/jquery-1.11.1.min.js"></script -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/jQueryMobile/jquery.mobile-1.4.5.min.js"></script>
  <link rel="stylesheet" href="css/custom.css" />
  <script src="js/funciones.js"></script>


<!--link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script-->
    </head>
<body>

<?php
function cabecera(){
  echo '<a href="#inicio" data-role="button" data-icon="home" data-iconpos="notext" data-theme="b" data-iconpos="left" data-inline="true">Inicio</a>
  ';
  //<h1> Seguridad y Sistema JM </h1>
  ///<!--a href="#" data-role="button" data-icon="bars" data-iconpos="notext" data-theme="b" data-iconpos="right" data-inline="true">Menú</a -->
}

function footer(){
  echo '<h2>Todos los derechos resevado @ Seguridad y Sistema JM</h2>';
}

function logo(){
  echo '<center><img src="img/logo.png" alt="Seguridad y Sistema JM"  width="70%" /> </center>';
}
?>

<!-- primera pagina -->
<div data-role="page" id="inicio">

<!-- cabecera -->
<div data-role="header" data-theme="e">
<?php echo cabecera(); ?>
</div>

<!-- contenido -->
<div data-role="main" class="ui-content2">
<?php echo logo(); ?>

<ul data-role="listview" data-inset="true">
   <li><a href="#banco" class="ui-btn ui-icon-info ui-btn-icon-left" data-transition="slide"> Número de Cuenta Bancarios</a></li>
   <li><a href="#formulario" class="ui-btn ui-icon-bullets ui-btn-icon-left">Formulario de Pago</a></li>
   <li><a href="http://www.seguridadsistema.com.ve/app/app-SySJM.apk" class="ui-btn ui-icon-action ui-btn-icon-left"> Descargar App para Moviles</a></li>
   <li><a href="http://seguridadsistema.mercadoshops.com.ve" class="ui-btn ui-icon-shop ui-btn-icon-left"> Mercado Shops</a></li>
   <li><a href="#contactenos" data-rel="popup" class="ui-btn ui-icon-user ui-btn-icon-left" data-transition="slideup"> Contactanos</a></li>
</ul>
</div>



<div data-role="popup" id="contactenos" class="ui-content2">
<div data-role="header">
  <h1>Contacto</h1>
</div>

<div data-role="main" class="ui-content2">
Móvil: 0412-3021677<br>
Email: ventas@seguridadsistema.com.ve<br>
Atención al Publico: <br>Lunes a Viernes <br>8:30 a.m a 12:00 p.m y 2.30pm a 6.00pm<br>
Envío: <br>Lunes a Viernes hasta las 3:30pm<br>
Previa Confirmación de la Transferencia/Deposito<br>
<br>
¡Gracias por preferirnos!<br>
</p>
</div>

</div>
<div class="redes_sociales">
<a href="https://www.facebook.com/SeguridadySistemaJM" class="espacio" ><img src="img/facebook.png" alt="ir a facebook"  width="10%" height="10%"/></a>
<a href="http://twitter.com/SyS_JM" class="espacio"><img src="img/twitter.png" alt="ir a facebook"  width="10%" height="10%"/></a>
<a href="#" class="espacio"><img src="img/correo.png" alt="ir a facebook"  width="10%" height="10%"/></a>
</div>
      <!-- pie de pagina -->
<div data-role="footer">
<?php echo footer();?>
</div>
<div class="footer2">Barquisimeto - Venezuela</div>
</div>


<!-- primera pagina -->
<div data-role="page" id="formulario">

<!-- cabecera -->
<div data-role="header" data-theme="e">
<?php echo cabecera(); ?>
</div>

<!-- contenido -->
<div data-role="content">
  <?php echo logo(); ?>

<form method="post" action="registrar.php" name="formulario" autocomplete="false" data-ajax="false">
  <!-- h1 class="letras">Cuentas Bancarias</h1 -->
    <ul data-role="listview" data-inset="true" data-shadow="false">
      <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Datos del Pago</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">

              <div data-role="main" class="ui-content2" >
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre" id="nombre" data-clear-btn="true">
                  <label for="apellido">Apellido:</label>
                  <input type="text" name="apellido" id="apellido" class="required" data-clear-btn="true">
                  <label for="fname">Seudonimo:</label>
                  <input type="text" name="seudonimo" id="seudonimo" data-clear-btn="true">
                  <label for="fname">Cantidad Articulo:</label>
                  <input type="text" name="cantidad" id="cantidad" data-clear-btn="true">
                  <label for="fname">Nombre Articulo:</label>
                  <input type="text" name="nomart" id="nomart" data-clear-btn="true">
                  <label for="select-choice-0" class="select"/>Tipo de Pago:</label/>
                  <select name="tipopago" id="tipopago"/>
                     <option value="Transferencia"/>Transferencia</option/>
                     <option value="Deposito"     />Deposito</option/>
                     <option value="MercadoPago"  />Mercado Pago</option/>
                  </select/>

                  <label for="fname">Banco Origen:</label>
                  <input type="text" name="borigen" id="borigen" data-clear-btn="true">

                  <label for="bdestino" class="select"/>Banco Destinio:</label/>
                  <select name="bdestino" id="bdestino"/>
                     <option value="Provincial"/>Provincial</option/>
                     <option value="Mercantil"/>Mercantil</option/>
                     <option value="FondoComun" />Fondo Comun</option/>
                     <option value="Tesoro"/>Tesoro</option/>
                     <option value="Banesco"/>Banesco</option/>
                     <option value="Venezuela"/>Venezuela</option/>
                  </select/>

                  <label for="numero">Nº Del Deposito/Transferencia:</label>
                  <input type="text" name="numero" id="numero" number:data-clear-btn="true">

                  <label for="fecha">Fecha:</label>
                  <input type="date" name="fecha" id="fecha">

                  <label for="monto">Monto Depositado:</label>
                  <input type="text" name="monto" id="monto" data-clear-btn="true">

                  <label for="fname">Observacion:</label>
                  <textarea name="obse" id="obse"></textarea>
              </div></div>
          </li>
        </ul>
      </li>

      <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Datos del Envio</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">

            <div data-role="main" class="ui-content2" >
                <label for="enombre">Nombre:</label>
                <input type="text" name="enombre" id="enombre" data-clear-btn="true">
                <label for="cedula">Cédula:</label>
                <input type="text" name="cedula" id="cedula" data-clear-btn="true">
                <label for="telmov">Teléfono:</label>
                <input type="text" name="telmov" id="telmov" data-clear-btn="true" tel:data-clear-btn="true">
                <label for="encomienda" class="select"/>Encomienda:</label/>
                <select name="encomienda" id="encomienda"/>
                   <option value="Zoom"/>Zoom</option/>
                </select/>
                <label for="direccion">Dirección Envio:</label>
                <input type="text" name="direccion" id="direccion" data-clear-btn="true">
                <label for="estado">Estado:</label>
                <input type="text" name="estado" id="estado" data-clear-btn="true">
                <label for="ciudad">Ciudad:</label>
                <input type="text" name="ciudad" id="ciudad" data-clear-btn="true">
                <label for="obse">Observación:</label>
                <textarea name="obse" id="obse"></textarea>

                <label for="registrar" class="select">¿Desea estar siempre informado acerca de Nuestros Productos y Lista de Precio?</label>
                <select id="registrar" name="registrar" data-role="slider">
                  <option value="Si" select>Si</option>
                  <option value="No">No</option>

                </select>
                <label for="emailBox">Correo Electrónico</label>
                <input type="email" name="emailBox" id="emailBox" value="" />
            </div></div>

          </li>
        </ul>
      </li>

    </ul>

    <!-- button type="submit" class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Enviar</button-->
    <input type="submit" class='S' value="Enviar" data-icon="check" data-iconpos="right" data-inline="true">

</form>
</div>


<!-- pie de pagina -->
<div data-role="footer">
  <h2>Todos los derechos resevador @ Seguridad y Sistema JM</h2>
</div>

</div>

<!-- CUENTA BANCARIA -->
<div data-role="page" id="banco">

<!-- cabecera -->
  <div data-role="header" data-theme="e">
  <?php echo cabecera(); ?>
  </div>

  <!-- contenido -->
  <div data-role="main" class="ui-content2">
<?php echo logo(); ?>

  <h1 class="letras">Cuentas Bancarias</h1>
    <ul data-role="listview" data-inset="true" data-shadow="false">
      <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Provincial</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">
                CUENTA DE AHORRO <br>No – 0108 0908 80 0200042413<br>
                JESUS LOBATON CI 15668694<br>
                ventas@seguridadsistema.com.ve</div>
          </li>
        </ul>
        <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Fondo Comun</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">
                CUENTA DE CORRIENTE <br>No – 0151 0131 8281 3100 5411<br>
                JESUS LOBATON CI 15668694<br>
                ventas@seguridadsistema.com.ve</div>
          </li>
        </ul>
        </li>
        <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Venezuela</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">
                CUENTA DE CORRIENTE <br>No – 0102 0112 8000 0005 4043<br>
                JESUS LOBATON CI 15668694<br>
                ventas@seguridadsistema.com.ve</div>
          </li>
        </ul>
        </li>

        <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Mercantil</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">
                CUENTA DE AHORRO <br>No – 0105 0743 03 0743095537<br>
                JESUS LOBATON CI 15668694<br>
                ventas@seguridadsistema.com.ve</div>
          </li>
        </ul>
        </li>

        <li data-role="collapsible" data-iconpos="right" data-inset="false">
        <h2>Banesco</h2>
        <ul data-role="listview" data-theme="b">
          <li><div class="datos_banco">
                CUENTA DE CORRIENTE <br>No – 0134 0475 52 4751013992<br>
                JESUS LOBATON CI 18949513<br>
                ventas@seguridadsistema.com.ve</div>
          </li>
        </ul>
        </li>
      </li>

    </ul>
  </div>

  <!-- pie de pagina -->
  <div data-role="footer">
  <?php echo footer();?>
  </div>

</div>


</body>
</html>