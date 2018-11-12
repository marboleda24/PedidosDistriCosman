<?php

require '../../all/conexion/conexion.php';

$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$ciudad = $_POST['ciudad'];
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios
        (nombre,usuario,pass,documento,telefono,direccion,barrio,ciudad,rol)
        VALUES
        ('$nombre','$documento','$documento','$documento','$telefono','$direccion','$barrio','$ciudad','$rol')";

$query = mysqli_query($conexion, $sql);

if($query)
{

  echo
      "
          <script>
          alert('Usuario Creado');
          window.location.href='index.php';
          </script>

      ";

}
else
{

  echo
      "
          <script>
          alert('ERROR');
          window.location.href='index.php';
          </script>

      ";

}

mysqli_close($conexion);
