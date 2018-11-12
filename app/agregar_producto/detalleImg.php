<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';

$id = $_GET['id'];
$img = $_GET['img'];

$obj = new FuncionesProductos();

$consulta = $obj -> mostrar_detalle($conexion, $id);

require 'html/detalleImgHtml.php';

