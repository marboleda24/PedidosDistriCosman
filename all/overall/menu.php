<?php
 /**
  * Menu de la aplicación
  *
  * Script que define los menus de la aplicación
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Diciembre/18/2018
  * @FechaEdicion Diciembre/18/2018
  * @access public
  * @version 1
  */
session_start();

 if($_SESSION['permisos_usuario'] == ''){
  session_destroy();
  header("location:../../index.php");
 }
 # 1 Cliente, 2 vendedor y 3 Administrador

 $usuario = $_SESSION['permisos_usuario'];

 if($usuario == 1) {
  require 'menu/menuCliente.php';
 }
 else if($usuario == 2) {
  require 'menu/menuCliente.php';
 }
 else if($usuario == 3) {
  require 'menu/menuAdmon.php';
 }
