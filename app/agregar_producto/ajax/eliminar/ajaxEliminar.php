<?php

require '../../../../all/conexion/conexion.php';

$id = $_POST['id'];

$sql = "DELETE FROM productos WHERE id_producto = '$id'";

$resultado = mysqli_query($conexion, $sql);

echo $resultado;