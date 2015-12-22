<?php
//http://localhost/Descargas/Migracion/index.php?archivo=PRODUCTOS-SYSJM
//http://localhost/Descargas/Migracion/buscar.php?codigo=domo

error_reporting(E_ALL);
ini_set("display_errors", 1);
include "conexion.php";


//    $sql ="mysqldump --user root --password=123 productos > /home/schuma/productos.sql";
//    $ultima_linea = system($sql, $retval);
//$ultima_linea = system('ls', $retval);
//echo $retval;
    //shell_exec($sql);
    //exit();

$origen = "/home/schuma/Descargas/Migracion/";
$archivo = $_GET["archivo"];
//$archivo2 = "PRODUCTOS-SYSJM";
echo "Desde: ".$origen.$archivo."<br>";
//echo "Desde: ".$origen.$archivo2."<br>";
$lineas = file($origen.$archivo,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) or exit("Error abriendo fichero!");
//$lineas2 = file($origen.$archivo2,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) or exit("Error abriendo fichero!");
$arr2 = $arr = array();

foreach ($lineas as $linea_num => $linea)
{
    $datos = explode("\t",$linea);

    $arr2[$linea_num][] = $codigo = trim($datos[0]);
    $arr2[$linea_num][] = $descr  = trim($datos[1]);
    $arr2[$linea_num][] = $descr2 = trim($datos[2]);
    $arr2[$linea_num][] = $descr3 = trim($datos[3]);
    $arr2[$linea_num][] = $depart = trim($datos[4]);

    $arr2[$linea_num][] = $video  = trim(($datos[6]=='NULL')? '' : $datos[6]);
    $arr2[$linea_num][] = $audio  = trim(($datos[5]=='NULL')? '' : $datos[5]);
    $arr2[$linea_num][] = $resolucion = trim(($datos[7]=='NULL')? '' : $datos[7]);
    $arr2[$linea_num][] = $general = trim(($datos[8]=='NULL')? '' : $datos[8]);
    $arr2[$linea_num][] = $almacenamiento = trim(($datos[9]=='NULL')? '' : $datos[9]);
    $arr2[$linea_num][] = $grabacion = trim(($datos[10]=='NULL')? '' : $datos[10]);
    $arr2[$linea_num][] = $exist = trim($datos[11]);
    $arr2[$linea_num][] = $oferta = $datos[12];
    $arr2[$linea_num][] = $precio = $datos[13]; //number_format(trim($datos[5]),2,",",".");
    $arr2[$linea_num][] = $descripcion = $descr2." ".$descr3;
//    $arr2[$linea_num][] = $descripcion = $descr." ".$descr2." ".$descr3;
//v1
  //  $idimgen = "http://www.toyolobaimport.com/SyS_JM/app/default.png";
  //  $arr[] = array($codigo, $descripcion, $exist, $precio, $idimagen);
//v2
    $arr[] = array($codigo, $descr, $exist, $precio, $oferta);
}
//echo "<pre>";print_R($arr2);exit();
////// ELIMINAR LOS DATOS DE LA TABLA INVENTARIO /////
echo "Eliminacion de la Tabla de Inventario..."."<BR>";
$sql = "TRUNCATE TABLE inventario";
mysqli_query($con,$sql) or exit("Error al Eliminar los Datos de la Tabla");
//////////////////////////////////////////////////////

////// MIGRACION DE LOS DATOS ///////////////////////
echo "Migracion de los datos a la Tabla de Inventario..."."<BR>";
foreach ($arr2 as $key => $arreglo){
//v1
    //$consulta = "INSERT INTO inventario (codpro, descr, exist, precio, imagen) VALUES('$arreglo[0]','$arreglo[1]',$arreglo[2],$arreglo[3], $arreglo[4])";
//v2
$key1 = $key+1;
$consulta = "INSERT INTO inventario VALUES($key1,'$arreglo[0]','$arreglo[1]','$descripcion','$arreglo[5]','$arreglo[6]','$arreglo[7]','$arreglo[8]','$arreglo[9]','$arreglo[10]',$arreglo[11],$arreglo[12],$arreglo[13], '')";
///echo "<br>";
    mysqli_query($con, $consulta) or exit("Error insertando los datos");
//    exit();

}

///////////////////////////////////////////////////////

///////  ACTUALIZACION CON TABLA DE LAS IMAGENES /////
echo "Actualizacion de los codigos faltantes en la tablas de Imagenes..."."<BR>";
$sql = "select i.codpro, img.*
from
    inventario i
LEFT JOIN
    imagenes img
on
     img.codpro = i.codpro
where
     i.codpro is null  or
     img.codpro is null";

$result = mysqli_query($con, $sql) or die(mysql_error());
//$arr = $datos = array();
if ($result){
	while ($fila = mysqli_fetch_array($result)) {
	    $consulta = "INSERT INTO imagenes (codpro) VALUES('".$fila[0]."')";
	    mysqli_query($con, $consulta) or exit("Error insertando los datos");
	}
}
///////
    echo "Migracion Terminada..."."<BR>";
    echo "<br>.<hr>";
    echo "Para Consultar -> http://localhost/Descargas/Migracion/buscar.php?codigo=domo";
    echo "<br>";
    echo " mysqldump --user root --password=123 productos > /home/schuma/Descargas/Migracion/productos.sql";
    echo "<br>";
    echo "Abrir la BD en el hosting y Restaurar el archivo productos.sql";
    echo "<br>";
    echo "https://caura.tepuyserver.net:2083/cpsess8356567328/3rdparty/phpMyAdmin/index.php#PMAURL-0:index.php?db=&table=&server=1&target=&lang=es&collation_connection=utf8_general_ci&token=f1741d50a044101015e2b00ae155da92";
    $sql ="mysqldump --user root --password=123 productos > /home/schuma/Descargas/Migracion/productos.sql";
    //$ultima_linea = system($sql, $retval);
    echo shell_exec($sql);
?>
