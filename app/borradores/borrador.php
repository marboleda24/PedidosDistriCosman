<?php

require '../../all/conexion/conexion.php';
#session_start();

$id_pedido = $_GET['id_pedido'];

$sql = "SELECT * FROM detalle WHERE id_pedido=$id_pedido";
$consulta = mysqli_query($conexion, $sql);

require 'html/borradorHtml.php';
