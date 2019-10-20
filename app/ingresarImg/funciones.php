<?php
 /**
  * Funciones para la gestión del ingreso de imagenes
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Diciembre/18/2018
  * @FechaEdicion Diciembre/18/2018
  * @version 1
  */
 class FuncionesImg {
  function ingresarImagen($con, $c, $n, $i) {
   $sql = mysqli_query($con, "INSERT INTO img (categoria, nombre_img, img) VALUES ('$c','$n','$i')");
   if($sql) {
    echo "
     <script>
      alert('Imagen guardada');
      window.location.href='index.php';
     </script>";
   }
   else {
    echo "ERROR" . $sql;    
   }
  }  
 }