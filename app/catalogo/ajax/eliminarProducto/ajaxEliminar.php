<?php

require '../../../../all/conexion/conexion.php';

$id = $_POST['id'];

$sql = "DELETE FROM tmp WHERE id = '$id'";

$resultado = mysqli_query($conexion, $sql);

echo $resultado;