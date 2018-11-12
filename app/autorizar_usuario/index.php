<?php

  require '../../all/conexion/conexion.php';

  $sql = "SELECT * FROM usuarios WHERE rol = 0";
  $consulta = mysqli_query($conexion, $sql);

  require 'html/indexHtml.php';

 ?>
