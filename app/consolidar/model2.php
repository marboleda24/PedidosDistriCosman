<?php

require '../../all/conexion/conexion.php';

$accion = 1;
$estado = 'Aprobado';

#estado 1 es igual a NO despachado // estado 2 es igual a despachado

$query = "SELECT id, fecha, cliente FROM pedidos WHERE accion = '$accion' AND estado = '$estado'";

$individuales = mysqli_query($conexion, $query);

mysqli_close($conexion);
