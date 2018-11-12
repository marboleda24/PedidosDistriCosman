<?php

require '../../all/conexion/conexion.php';

session_start();

error_reporting(0);

$id = intval($_SESSION['id_usuario']);

$sql = "SELECT * FROM tmp WHERE id_usuario = $id ORDER BY id  DESC";
$consulta = mysqli_query($conexion, $sql);

require 'html/listaHtml.php';

mysqli_close($conexion);
?>
<script src="ajax/eliminarProducto/ajaxEliminar.js"></script>
