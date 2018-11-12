<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';

$query = new FuncionesProductos();

if(isset($_POST['btn-agregar']))
{

    $id_img = $_POST['id_img'];
    $titulo = $_POST['titulo'];
    $referencia = $_POST['referencia'];

    $query->agregar_producto($conexion, $id_img, $titulo, $referencia);

}

if(isset($_GET['id_eliminar']))
{

    $id_producto = $_GET['id_eliminar'];

    $query->eliminar_producto($conexion, $id_producto);

    header("location:../agregar_producto/");

}

mysqli_close($conexion);
