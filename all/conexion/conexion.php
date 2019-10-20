<?php
 /**
  * Script de conexion a la BD
  *
  * Script para conectarse a la base de datos
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Noviembre/15/2018
  * @FechaEdicion Noviembre/15/2018
  * @version 1
  */
 include('config.php');
 $conexion = mysqli_connect(SERVIDOR,USUARIO,PASS,BD);
 mysqli_set_charset($conexion,'utf8');

 if(!$conexion){
  echo "ERROR al conectarse a la base de datos";
 }
