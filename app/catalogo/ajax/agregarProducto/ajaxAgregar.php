<?php

require '../../../../all/conexion/conexion.php';

session_start();

$id_usuario = $_SESSION['id_usuario'];

$id_producto = $_POST['id_producto'];
$titulo = $_POST['titulo'];
$referencia = $_POST['referencia'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$proveedor = $_POST['proveedor'];

$subtotal = $cantidad * $precio;

$sql = "INSERT INTO tmp (id_producto, titulo, cantidad_tmp, proveedor_tmp, precio_tmp, subtotal, referencia, id_usuario) VALUES ('$id_producto','$titulo','$cantidad','$proveedor','$precio','$subtotal','$referencia','$id_usuario')";

$resultado = mysqli_query($conexion, $sql);

echo $resultado;