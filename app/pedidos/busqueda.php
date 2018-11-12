<?php

require '../../all/conexion/conexion.php';

#session_start();

#$id = $_SESSION['id_usuario'];

$cedula = mysqli_real_escape_string($conexion, $_POST['cedula']);

$sql = "SELECT * FROM pedidos WHERE cliente = '$cedula' ORDER BY id DESC";

$consulta = mysqli_query($conexion, $sql);

require 'html/busquedaHtml.php';

mysqli_close($conexion);
