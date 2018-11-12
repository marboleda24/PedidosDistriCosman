<?php

require '../../all/conexion/conexion.php';

$nombre = $_POST['nombre'];
$pass = md5($_POST['pass']);
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO usuarios (nombre,usuario,pass,documento,telefono,direccion,barrio,ciudad,rol) VALUES ('$nombre','$documento','$pass','$documento','$telefono','$direccion','$barrio','$ciudad','0')";

$consulta = mysqli_query($conexion, $sql);

if($consulta)
{

    echo

        "
            <script>
            alert('Solicitud enviada, pronto confirmaremos tu registro');
            window.location.href='../web/index.php';
            </script>

        ";

}
else
{

    echo 'ERROR';

}

mysqli_close($conexion);
