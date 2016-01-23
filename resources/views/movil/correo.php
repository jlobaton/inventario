<?php 
session_start();
require_once('ajax.php');  

?>
<?php $xajax->printJavascript(); ?>

<h1>Escríbenos</h1><hr />
<div id="formcont">
<form id="contacto" action="javascript:void(null)" method="post" name="contacto">
	<div class="floatL contw" >
		<div class="inputwrap"><input name="nombre" type="text" class="nombre" id="nombre" required placeholder="Nombre" /> </div>
		<div class="inputwrap"><input name="empresa" type="text" class="empresa" id="empresa" required placeholder="Empresa" /></div>
		<div class="inputwrap"><input required type="email" placeholder="Email" class="email" /> </div>
		<div class="inputwrap"><input name="telefono" type="text" class="telf" id="telefono" required placeholder="Telefono" /></div>
    </div>
    
    <div class="floatR" >
	<textarea name="mensaje" class="msj" id="mensaje" required placeholder="Mensaje"></textarea>    
    </div>
    <input class="submitcon" type="submit" value="Enviar" onClick="xajax_procesarFormContactanos(xajax.getFormValues('contacto'));" />
</form>
</div>