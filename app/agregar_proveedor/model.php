<?php

require '../../all/conexion/conexion.php';

$proveedor = $_POST['proveedor'];
$encargado = $_POST['encargado'];

$sql = mysqli_query($conexion, "INSERT INTO proveedores (nombre, encargado) VALUES ('$proveedor', '$encargado')");

if($sql)
{

    echo
        "
            <script>
            alert('Proveedor guardado');
            window.location.href='index.php';
            </script>

        ";

}
else
{

    echo 'ERROR';

}

mysqli_close($conexion);
