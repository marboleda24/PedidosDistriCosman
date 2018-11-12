<?php

require '../../all/conexion/conexion.php';

$id = mysqli_real_escape_string($conexion, $_GET['id']);

$sql = "UPDATE usuarios SET rol = '1' WHERE id = '$id'";
$consulta = mysqli_query($conexion, $sql);

if($consulta){
  header("location:index.php");
}else{
  echo 'ERROR';
}

mysqli_close($conexion);

 ?>
