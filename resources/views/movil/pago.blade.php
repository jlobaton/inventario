<?php //sustituye tuemail@tudominio.com con tu dirección//
if (!empty($_POST['nombre']) and (!empty($_POST['enombre']))){
   ////////   DATOS DEL PAGO  //////////
    $datos['nombre']     = $_POST['nombre'];
    $datos['apellido']   = $_POST['apellido'];
    $datos['seudonimo']  = $_POST['seudonimo'];
    $datos['cantidad']   = $_POST['cantidad'];
    $datos['nomart']     = $_POST['nomart'];
    $datos['tipopago']   = $_POST['tipopago'];
    $datos['borigen']    = $_POST['borigen'];
    $datos['bdestino']   = $_POST['bdestino'];
    $datos['fecha']      = $_POST['fecha'];
    $datos['numero']     = $_POST['numero'];
    $datos['monto']      = $_POST['monto'];
    $datos['obse']       = $_POST['obse'];

   /////////// DATOS DEL ENVIO  /////////////
    $datos['enombre']    = $_POST['enombre'];
    $datos['cedula']     = $_POST['cedula'];
    $datos['telmov']     = $_POST['telmov'];
    $datos['encomienda'] = $_POST['encomienda'];
    $datos['direccion']  = $_POST['direccion'];
    $datos['estado']     = $_POST['estado'];
    $datos['ciudad']     = $_POST['ciudad'];
    $datos['obse']       = $_POST['obse'];
    $datos['registrar']  = $_POST['registrar'];
    $datos['emailBox']   = $_POST['emailBox'];
   ////////////////

    $email  = $datos["emailBox"];
    $to     = "ventas@seguridadsistema.com.ve";
    $asunto = "Reporte de Pago";
    $headers = "Reply-To: ".$email." \r\n";
    $headers .= "From: ".$email." \n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $datoscorreo = " =====  DATOS DEL PAGO  ====="."<br>";
    $datoscorreo .= "Nombre: ".$datos["nombre"]."<br>";
    $datoscorreo .= "Apellido: ".$datos["apellido"]."<br>";
    $datoscorreo .= "Seudonimo: ".$datos["seudonimo"]."<br>";
    $datoscorreo .= "Cantidad: ".$datos["cantidad"]."<br>";
    $datoscorreo .= "Producto: ".$datos["nomart"]."<br>";
    $datoscorreo .= "Tipo de Pago: ".$datos["tipopago"]."<br>";
    $datoscorreo .= "Fecha: ".$datos["fecha"]."<br>";
    $datoscorreo .= "Numero: ".$datos["numero"]."<br>";
    $datoscorreo .= "monto: ".$datos["monto"]."<br>";
    $datoscorreo .= "Observacion: ".$datos["obse"]."<br>"."<br>";

    $datoscorreo .= " =====  DATOS DEL ENVIO  ====="."<br>";
    $datoscorreo .= "Nombre: ".$datos["enombre"]."<br>";
    $datoscorreo .= "Cedula: ".$datos["cedula"]."<br>";
    $datoscorreo .= "Telefono: ".$datos["telmov"]."<br>";
    $datoscorreo .= "Direccion: ".$datos["direccion"]."<br>";
    $datoscorreo .= "Estado: ".$datos["estado"]."<br>";
    $datoscorreo .= "Ciudad: ".$datos["ciudad"]."<br>";
    $datoscorreo .= "Observacion: ".$datos["obse"]."<br>";

    ///////////
    $datoscorreo .= "Registrar Correo: ".$datos["registrar"]."<br>";
    $datoscorreo .= "Correo Electronico: ".$datos["emailBox"]."<br>";

    echo "<pre>";
    print_R($datoscorreo);
exit();
    //if (!empty($email)){
    if (mail($to,$asunto,$datoscorreo,$headers)){
        echo "enviado";
    }
    //}
    }else{
        //header("Location: /index.php#formulario");
    }
?>