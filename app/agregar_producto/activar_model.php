<?php

require '../../all/conexion/conexion.php';

$id = $_GET['id'];

$sql = "SELECT estado FROM productos WHERE id_producto = '$id'";
$resultado = mysqli_query($conexion, $sql);
$c = mysqli_fetch_array($resultado);

if($c['estado']==1)
{
    
    $UPDATE = "UPDATE productos set estado = '2' WHERE id_producto = '$id'";
    mysqli_query($conexion, $UPDATE);
    
}
else if($c['estado']==2)
{
    
    $UPDATE = "UPDATE productos set estado = '1' WHERE id_producto = '$id'";
    mysqli_query($conexion, $UPDATE);    
    
}

header("location:lista.php");