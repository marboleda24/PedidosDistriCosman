<?php
 /**
  * Inicio de la aplicación
  *
  * Script para evalua si la aplicación esta iniciando o si la petición es una vista a ser mostrada.
  *
  * @author       Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor       Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha        Noviembre/11/2018
  * @FechaEdicion Noviembre/11/2018
  * @access       public
  * @param        una vista
  * @return       Redireccion
  * @version      1
  */
 if(isset($_GET['view'])) {
  header("location:app/".$_GET['view']."/index.php");
 }
 else {
  //Solo voy a hacer un cambio para probar;
  header("location:app/web/");
 }