<?php

require '../../all/conexion/conexion.php';
error_reporting(0);

session_start();

$id = $_SESSION['id_usuario'];

$sql = "SELECT * FROM tmp WHERE id_usuario=$id";

$consulta = mysqli_query($conexion, $sql);

$num = mysqli_num_rows($consulta);

if($num == 0)
{

    header("location:../catalogo/");

}

    require 'html/indexHtml.php';
