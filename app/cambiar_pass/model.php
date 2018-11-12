<?php

require '../../all/conexion/conexion.php';

session_start();

$password = mysqli_real_escape_string($conexion, $_POST['pass']);
$pass = md5($password);

$id = $_SESSION['id_usuario'];

$sql = "UPDATE usuarios SET pass ='$pass' WHERE id = '$id'";
$query = mysqli_query($conexion, $sql);

if($query){
  echo
      "
          <script>
          alert('contraseña Guardada');
          window.location.href='index.php';
          </script>

      ";
}else{
  echo
      "
          <script>
          alert('ERROR');
          window.location.href='index.php';
          </script>

      ";
}

mysqli_close($conexion);
