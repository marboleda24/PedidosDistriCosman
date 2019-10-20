<?php

require '../../all/conexion/conexion.php';


if(isset($_GET['accion']))
{
    
    $accion = $_GET['accion'];
    $id_pedido = $_GET['id'];

    $sql = "UPDATE pedidos SET accion = '$accion' WHERE id = '$id_pedido'";
    $query = mysqli_query($conexion, $sql);
    
    if($query)
    {

                echo 
                "
                    <script>
                    alert('Pedido despachado');
                    window.location.href='index.php';
                    </script>

                ";

    }
    else
    {

                echo 
                "
                    <script>
                    alert('Ocurrio un error con el servidor, vuelva a intentarlo');
                    window.location.href='index.php';
                    </script>

                ";

    }
    
}

