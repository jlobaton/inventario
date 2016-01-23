@extends('movil.layouts.template')
@section('content')

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
  echo '<center><img src="../moviles/img/logo.svg" alt="Seguridad y Sistema JM" width="320px" /> </center>';
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
  <a href="https://www.facebook.com/SeguridadySistemaJM" class="espacio" ><img src="../moviles/img/facebook.png" alt="ir a facebook"  width="10%" height="10%"/></a>
  <a href="http://twitter.com/SyS_JM" class="espacio"><img src="../moviles/img/twitter.png" alt="ir a facebook"  width="10%" height="10%"/></a>
  <a href="#" class="espacio"><img src="../moviles/img/correo.png" alt="ir a facebook"  width="10%" height="10%"/></a>
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

  {!! Form::open(['route' => 'movil.store', 'method'=>'POST' ]) !!}

    <!-- h1 class="letras">Cuentas Bancarias</h1 -->
      <ul data-role="listview" data-inset="true" data-shadow="false">
        <li data-role="collapsible" data-iconpos="right" data-inset="false">
          <h2>Datos del Pago</h2>
          <ul data-role="listview" data-theme="b">
            <li><div class="datos_banco">

                <div data-role="main" class="ui-content2" >
                  {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::text('apellido',null, ['class' => 'form-control', 'placeholder' => 'Apellido', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::text('seudonimo',null, ['class' => 'form-control', 'placeholder' => 'Seudonimo', 'data-clear-btn'=>"true"]); !!}

                  {!! Form::number('cantidad',null, ['class' => 'form-control', 'placeholder' => 'Cantidad de Artículo', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::select('inventario_id',$array_inv ,NULL, ['class' => 'form-control', 'placeholder' => 'Seleccione su Producto', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::select('tipopago_id',$array_tp ,NULL, ['class' => 'form-control', 'placeholder' => 'Tipo de Pago', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::text('borigen',null, ['class' => 'form-control', 'placeholder' => 'Banco de Origen', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::select('banco_id', $array_banco, null, ['class' => 'form-control', 'placeholder' => 'Banco a donde realizó el pago', 'required']); !!}

                  {!! Form::number('numero',null, ['class' => 'form-control', 'placeholder' => 'Nº Del Deposito/Transferencia', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::number('monto',NULL, ['class' => 'form-control', 'placeholder' => ' Monto de su pago', 'data-clear-btn'=>"true",'required']); !!}

                  {!! Form::text('fecha',null, ['class' => 'form-control', 'placeholder' => 'Fecha de su pago', 'data-clear-btn'=>"true", 'required']); !!}

                  {!! Form::textarea('obse',null, ['class' => 'form-control', 'placeholder' => 'Observación General', 'data-clear-btn'=>"true", 'required']); !!}

                </div></div>
            </li>
          </ul>
        </li>

        <li data-role="collapsible" data-iconpos="right" data-inset="false">
          <h2>Datos del Envio</h2>
          <ul data-role="listview" data-theme="b">
            <li><div class="datos_banco">

              <div data-role="main" class="ui-content2" >

              <div class="form-group">
                {!! Form::text('envnombre',NULL, ['class' => 'form-control', 'placeholder' => 'Nombre completo persona quien retira', 'data-clear-btn'=>"true", 'required']); !!}
              </div>
              <div class="form-group">
                {!! Form::text('cedula',NULL, ['class' => 'form-control', 'placeholder' => 'C.I. persona quien retira', 'data-clear-btn'=>"true", 'required']); !!}
              </div>
              <div class="form-group">
                {!! Form::text('envtele',NULL, ['class' => 'form-control', 'placeholder' => 'Teléfono persona quien retira', 'data-clear-btn'=>"true", 'required']); !!}
              </div>
              <div class="form-group">
                {!! Form::select('encomienda_id', $array_encomienda, NULL, ['class' => 'form-control', 'placeholder' => 'Encomienda', 'data-clear-btn'=>"true", 'required']); !!}
              </div>
              <div class="form-group">
                {!! Form::text('envdirec',null, ['class' => 'form-control', 'placeholder' => 'Dirección exacta del envío', 'data-clear-btn'=>"true",'required']); !!}
              </div>
              <div class="form-group">
                {!! Form::select('estado_id',$array_estado, NULL, ['class' => 'form-control', 'placeholder' => 'Estado','data-clear-btn'=>"true", 'required']); !!}
              </div>
              <div class="form-group">
                {!! Form::select('ciudad_id', $array_ciudad, NULL, ['class' => 'form-control', 'placeholder' => 'Ciudad', 'data-clear-btn'=>"true",'required']) !!}

              </div>
              <div class="form-group">
                {!! Form::textarea('envobser',NULL, ['class' => 'form-control', 'placeholder' => 'Observación General','data-clear-btn'=>"true"]); !!}
              </div>

                  <label for="registrar" class="select">¿Desea estar siempre informado acerca de Nuestros Productos y Lista de Precio?</label>
                  <select id="registrar" name="registrar" data-role="slider">
                    <option value="Si" select>Si</option>
                    <option value="No">No</option>

                  </select>
              <div class="form-group">
                {!! Form::email('email',NULL, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico','data-clear-btn'=>"true"]); !!}
              </div>


              </div></div>

            </li>
          </ul>
        </li>

      </ul>

      {!! Form::submit('Enviar', ['class' => 'btn btn-success', 'data-icon'=>"check", 'data-inline'=>"true"]) !!}

  {!! Form::close() !!}
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
@endsection