<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';
#session_start();

$id = $_GET['id'];
$img = $_GET['img'];

$p = new FuncionesCatalogo();

$consulta = $p -> mostrar_detalle($conexion, $id);

require 'html/detalleImgHtml.php';
require 'carrito.php';
