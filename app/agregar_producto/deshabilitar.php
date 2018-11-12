<?php

require '../../all/conexion/conexion.php';

$img = mysqli_real_escape_string($conexion, $_GET['img']);

$sql = "UPDATE img SET deshabilitar = '1' WHERE id_img = '$img'";
$consulta = mysqli_query($conexion, $sql);

header("location:index.php");

?>
