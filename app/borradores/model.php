<?php

require '../../all/conexion/conexion.php';

session_start();

$id_usuario = $_SESSION['id_usuario'];

$fecha = date('y-m-d');

if(!empty($_GET['accion']))
{
    /*
    ** se utiliza accion 1 para indicar pedido confirmado
    ** accion 2 para pedido guardado como borrador
    ** accion 3 para pedido eliminado
    */

    $accion = $_GET['accion'];
    $id_pedido = $_GET['id'];

    $update = "UPDATE pedidos SET accion = '$accion' WHERE id = '$id_pedido'";
    $consulta = mysqli_query($conexion, $update);

    if($consulta)
    {

        echo
            "
                <script>
                alert('Cambio efectuado con exito!');
                window.location.href='index.php';
                </script>

            ";

    }



}

mysqli_close($conexion);
