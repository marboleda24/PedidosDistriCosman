<?php

require '../../all/conexion/conexion.php';

session_start();

$fecha = $_POST['fecha'];
$id = $_SESSION['id_usuario'];
$estado = 'Aprobado';
$accion = 'pendiente';


$id_pro = "SELECT * FROM proveedores";
$result = mysqli_query($conexion, $id_pro);
