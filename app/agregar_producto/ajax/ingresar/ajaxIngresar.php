<?php

require '../../../../all/conexion/conexion.php';

$id = $_POST['id_img'];
$referencia = $_POST['referencia'];
$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$proveedor = $_POST['proveedor'];

$sql = "INSERT INTO productos (id_img,titulo,referencia,precio,proveedor) VALUES ('$id','$titulo','$referencia','$precio','$proveedor')";
$resultado = mysqli_query($conexion, $sql);
echo $resultado;

