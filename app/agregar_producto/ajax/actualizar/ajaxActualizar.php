<?php

require '../../../../all/conexion/conexion.php';

$referencia = $_POST['referencia'];
$titulo = $_POST['titulo'];
$id = $_POST['id'];
$precio = $_POST['precio'];

$sql = "UPDATE productos SET titulo = '$titulo', referencia = '$referencia', precio = '$precio' WHERE id_producto = '$id'";
$resultado = mysqli_query($conexion, $sql);

echo $resultado;
