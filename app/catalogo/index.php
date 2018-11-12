<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';
#session_start();

$where = '';

if(isset($_POST['categoria']))
{

   $where = $_POST['where'];

}

$obj = new FuncionesCatalogo;
$consulta = $obj -> mostrar($conexion);

require 'html/indexHtml.php';
require 'carrito.php';
