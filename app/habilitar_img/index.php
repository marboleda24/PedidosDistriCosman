<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';

/*$where = '';

if(isset($_GET['categoria']))
{

   $where = $_GET['where'];

}*/

$obj = new FuncionesProductos;
$consulta = $obj -> fotos_deshabilitadas($conexion);

require 'html/indexHtml.php';
