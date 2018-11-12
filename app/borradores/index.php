<?php

require '../../all/conexion/conexion.php';
    error_reporting(0);//OJO//OJO//OJO<<=============================
session_start();

    /*
    ** se utiliza accion 1 para indicar pedido confirmado
    ** accion 2 para pedido guardado como borrador
    ** accion 3 para pedido eliminado
    */

$id_usuario = $_SESSION['id_usuario'];

$sql = mysqli_query($conexion, "SELECT * FROM pedidos WHERE id_usuario = '$id_usuario' AND accion = '2'");

require 'html/indexHtml.php';
