<?php
 /**
  * Modelo del Login
  *
  * Script para gestionar los datos al momento del logueo en la aplicación
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Noviembre/15/2018
  * @FechaEdicion Noviembre/15/2018
  * @version 1
  */

 require '../../all/conexion/conexion.php';
 session_start();

 $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
 $pass = md5(mysqli_real_escape_string($conexion, $_POST['pass']));

 $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND pass = '$pass' AND estado = 1");
 $resultado = mysqli_fetch_array($consulta);
 $row = mysqli_num_rows($consulta);

 $permisos = $resultado['rol'];
 $id_usuario = $resultado['id'];
 $nombre = $resultado['nombre'];

 if($row > 0) {
  $_SESSION['id_usuario'] = $id_usuario;
  $_SESSION['nombre_usuario'] = $nombre;
  $_SESSION['permisos_usuario'] = $permisos;

  if($permisos == 1 || $permisos == 2) {
   #permiso 1 = clientes o vendedores
   mysqli_close();
   header("location:../../index.php?view=catalogo");
  }
  elseif($permisos == 3) {
   #permiso 2 administrativos
   mysqli_close();
   header("location:../../index.php?view=ingresarImg");
  }
  elseif($permisos == 0) {
   mysqli_close();
   session_destroy();
   header("location:../autorizar_usuario/pendiente.php");
  }
 }
 else {
  mysqli_close();
  session_destroy();
  header("location:index.php?mensaje=error");
 }
 mysqli_close($conexion);
