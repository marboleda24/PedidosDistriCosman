<?php

require '../../all/conexion/conexion.php';

session_start();

$id_usuario = $_SESSION['id_usuario'];

$fecha = date('y-m-d');

# accion '1' significa confirmar
# accion '2' significa guardar

if(isset($_GET['confirmar']))
{

    $accion = $_GET['confirmar'];
    $cliente = $_GET['cliente'];

}else if(isset($_GET['guardar'])){

    $accion = $_GET['guardar'];
    $cliente = mysqli_real_escape_string($_GET['cliente']);

}

   $insert = mysqli_query($conexion, "INSERT INTO pedidos (id_usuario, fecha, accion, cliente) VALUES ('$id_usuario','$fecha','$accion','$cliente')");

   if($insert)
   {
       $id_max = mysqli_query($conexion, "SELECT max(id) as id_p FROM pedidos");
       $id_p = mysqli_fetch_array($id_max);
       $id_pedido = $id_p['id_p'];

       $sql = "SELECT * FROM tmp WHERE id_usuario = $id_usuario";
       $resultado = mysqli_query($conexion, $sql);

        while($row = mysqli_fetch_array($resultado))
        {

            $id_producto = $row['id_producto'];
            $titulo = $row['titulo'];
            $cantidad = $row['cantidad_tmp'];
            $proveedor = $row['proveedor_tmp'];
            $precio = $row['precio_tmp'];
            $subtotal = $row['subtotal'];

            mysqli_query($conexion, "INSERT INTO detalle (id_producto, titulo, cantidad, proveedor, precio, subtotal, id_pedido) VALUES ('$id_producto','$titulo','$cantidad','$proveedor','$precio','$subtotal','$id_pedido')");

        }


        $sql_delete = "DELETE FROM tmp WHERE id_usuario = '$id_usuario'";
        mysqli_query($conexion, $sql_delete);

   }

        echo
            "
                <script>
                alert('Accion registrada con exito!');
                window.location.href='index.php';
                </script>

            ";

mysqli_close($conexion);
