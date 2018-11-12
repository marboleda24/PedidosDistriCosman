<?php

require '../../all/conexion/conexion.php';

$id = mysqli_real_escape_string($conexion, $_GET['img']);

$sql = "UPDATE img SET deshabilitar = '0' WHERE id_img = '$id'";
$consulta = mysqli_query($conexion, $sql);

header("location: index.php");

mysqli_close($conexion);

 ?>
