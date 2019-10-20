<?php
 /**
  * Inicio de la Administración de Usuarios
  *
  * Script inicial de la gestion de Usuarios
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Diciembre/18/2018
  * @FechaEdicion Diciembre/18/2018
  * @access public
  * @version 1
  */

 require '../../all/conexion/conexion.php';

 if(isset($_POST['btn-busqueda'])){
  $busqueda = $_POST['busquedad'];
 }

 require 'html/indexHtml.php';
?>
