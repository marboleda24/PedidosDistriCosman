<?php

#session_start();

#require '../../all/conexion/conexion.php';

$id = intval($_SESSION['id_usuario']);

$sql = "SELECT * FROM tmp WHERE id_usuario = $id ORDER BY id  DESC";
$consulta = mysqli_query($conexion, $sql);

require 'html/carritoHtml.php';

mysqli_close($conexion);
?>
<script src="ajax/eliminarProducto/ajaxEliminar.js"></script>
