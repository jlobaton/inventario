<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

include "conexion.php";


$method = $_SERVER['REQUEST_METHOD'];
$resource = $_SERVER['REQUEST_URI'];

//echo $method."-".$resource;
if ($method == "GET"){
    $codigo = mysql_real_escape_string(htmlspecialchars((!(empty($_GET["codigo"]))) ? $_GET["codigo"] : ''));
    $sha = mysql_real_escape_string(htmlspecialchars((!(empty($_GET["sha"]))) ? $_GET["sha"] : ''));


	$sql = "SELECT * FROM configuracion";
	$result = mysql_query($sql) or die(mysql_error());
	if ($result){

	   $fila = mysql_fetch_array($result);
	   if ($fila["estatus"] != 1){ //No mostrar los Precios
		$datos[] = array(
							"estatus"=>$fila["estatus"],
							"titulo"=>$fila["titulo"],
							"mensaje"=>$fila["mensaje"],
							"urlimg"=>$fila["urlimg"],
						);

	   }else{
		$datos = Buscar($codigo, $sha);

	   }
	}

	$arr["productos"] = $datos;
	mysql_close($con);
	echo (json_encode($arr));
}

/**
 * Funcion que permite generar un arreglo de los datos de las deudas de un socio.
 * @param string $codigo Nro de Carnet Del Socio
 * @param string $sha el token generado de la conexion
 * @return string Returns Arreglo string.
 */  
function Buscar($codigo, $sha){
$observacion = "** OFERTA **";

//$sql = "SELECT * FROM inventario where descr like '%$codigo%'";
$sql = "SELECT img.urlimagen, i.* FROM inventario i, imagenes img where i.descr like '%$codigo%'  and i.codpro=img.codpro";
$result = mysql_query($sql) or die(mysql_error());

$arr = $datos = array();

if ($result){
	while ($fila = mysql_fetch_array($result)) {
	//echo "<pre>";
	//echo $fila['descri'];exit();

	$datos[] = 
		array("estatus"=>1, 
              "idimagen"=> $fila["urlimagen"], 
		      "descr"   => $fila["descr"],
			  "descr2"  => $fila["descr2"],  
			  "video"   => $fila["video"], 			  
			  "resolucion" => $fila["resolucion"], 
			  "almacenamiento" => $fila["almacenamiento"], 
			  "grabacion"      => $fila["grabacion"], 
			  "general"        => $fila["general"], 
			  "exist"          => $fila["exist"], 
			  "oferta"         => ($fila["oferta"] == "1")? $observacion : "", 
			  "msg"            => $fila["msg"], 
 		      "precio"         => "Bs. ".number_format($fila["precio"],2,',','.') 
 		      );
	}
}else{
}

//$arr["productos"]  = $datos;
// Liberar los recursos asociados con el conjunto de resultados
// Esto se ejecutado automáticamente al finalizar el script.
mysql_free_result($result);
//echo (json_encode($arr));


return $datos;
}

?>
