<?php
error_reporting(0);
require '../../all/conexion/conexion.php';

session_start();

    /*
    ** se utiliza accion 1 para indicar pedido confirmado
    ** accion 2 para pedido guardado como borrador
    ** accion 3 para pedido eliminado
    */

$id = $_SESSION['id_usuario'];

$sql = "SELECT * FROM pedidos WHERE estado = 'pendiente' AND accion ='1'";

$consulta = mysqli_query($conexion, $sql);

require 'html/indexHtml.php';
