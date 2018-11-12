<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';

/*$where = '';

if(isset($_GET['categoria']))
{

   $where = $_GET['where'];

}*/

$obj = new FuncionesProductos;
$consulta = $obj -> mostrar_fotos($conexion);  

require 'html/indexHtml.php';
