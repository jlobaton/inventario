<?php
session_start();
include('xajax_core/xajax.inc.php'); 

$xajax = new xajax();

$xajax->registerFunction("enviarcorreo");
$xajax->registerFunction("procesarFormContactanos");


function procesarFormContactanos($form_values)
{
	 $respuestaXajax = new xajaxResponse();
	
	 $datos['nombre']   = $form_values['nombre'];
	 $datos['empresa']  = $form_values['empresa'];
	 $datos['correo']   = $form_values['correo'];
	 $datos['telefono'] = $form_values['telefono'];
	 $datos['mensaje']  = $form_values['mensaje'];	 
	
         $email = 'jesuslobaton@gmail.com';
 	 $to="ventas@toyolobaimport.com";
	 $asunto="Consulta Web TLI";
	 $headers .= "Reply-To: ".$email." \r\n"; 
	 $headers .= "From: ".$email." \n";    //mando el correo...
	 $headers .= "MIME-Version: 1.0\r\n"; 
  	 $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
 	
	 if (!empty($email)){
		mail($to,$asunto,$codhtml,$headers);                
                //echo "si";
	 }
         
         //enviarcorreo($datos);
	 $cadena = "<div class='mensaje'>Hola $nombre, tu correo ha sido enviado.<br/> <br/>Gracias por contactarnos.</div>";
	
	 //$respuestaXajax->assign("formcont","innerHTML", $cadena);
                  
         $respuestaXajax->assign("formcont","innerHTML", $cadena);
         $respuestaXajax->assign("formcont","innerHTML", $cadena);
	 return $respuestaXajax;
}


function enviarcorreo($datos)
{
	//$objResponse = new xajaxResponse();
	   // Se incluye la librería necesaria para el envio
	   require_once("fzo.mail.php");
	   $prioridad = 3;
	   $mail = new SMTP("localhost",'alfredo@toyolobaimport.com','toyo694');
	   // Se configuran los parametros necesarios para el envío
	   $de = "ventas@toyolobaimport.com";
	   $a = "ventas@toyolobaimport.com";
	   $asunto = "Toyo Loba Import :: Formulario de Contactanos";
	   //$cc = $_POST['cc'];
	   //$bcc = $_POST['bcc'];
	   $cuerpo = "Nombre: ".$datos['nombre']."<br>".
			   "Empresa: ".$datos['empresa']."<br>".
			   "Telefono: ".$datos['telefono']."<br>".
			   "Mensaje: ".$datos['mensaje']."<br><br><br><br><br>".	   
	   "Este es un correo automatico enviado desde la página de Toyo Loba Import, c.a.";
	
	   $header = $mail->make_header( $de, $a, $asunto, $prioridad, $cc, $bcc );
	   /* Pueden definirse más encabezados. Tener en cuenta la terminación de la linea con (\r\n)
	   $header .= "Reply-To: ".$_POST['from']." \r\n";
	   $header .= "Content-Type: text/plain; charset=\"iso-8859-1\" \r\n";
	   $header .= "Content-Transfer-Encoding: 8bit \r\n";
	   $header .= "MIME-Version: 1.0 \r\n";
	
	   */ // Se envia el correo y se verifica el error
	   $error = $mail->smtp_send($de, $a, $header, $cuerpo, $cc, $bcc);
	   if ($error == "0"){ echo "E-mail enviado correctamente"; }else{ echo $error; }

	 
	//return $objResponse;
}

$xajax->processRequest();
?>