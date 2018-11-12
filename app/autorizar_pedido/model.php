<?php

require '../../all/conexion/conexion.php';

$autorizar = $_POST['autorizar'];
$id = $_POST['id'];
$fecha = date('Y-m-d');

$update = "UPDATE pedidos SET estado = '$autorizar', fecha = '$fecha' WHERE id = '$id'";
$consulta = mysqli_query($conexion, $update);

header("location:index.php");

mysqli_close($conexion);
