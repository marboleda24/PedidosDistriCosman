<?php
 /**
  * Busqueda de usuarios
  *
  * Script para mostrar los usuarios creados en la aplicación
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Diciembre/2/2018
  * @FechaEdicion Diciembre/2/2018
  * @access public
  * @param una vista
  * @return Redireccion
  * @version 1
  * Comentarios: Se cambian los valores de los perfiles porque estaban trocados.
  */
 function buscarUsuarios($c){
  $sql = "SELECT * FROM usuarios";

  $resultado = mysqli_query($c, $sql);

  while($row = mysqli_fetch_array($resultado)){
   echo '<tr>';
    echo '<th>'.$row["nombre"].'</th>';
    echo '<td>'.$row["usuario"].'</td>';
    echo '<td>'.$row["telefono"].'</td>';
    echo '<td>'.rol($row["rol"]).'</td>';
   echo '</tr>';
  }
 }

 function rol($r){
  if($r == 1)
  {
   return "Cliente";
  }
  else if($r == 2)
  {
   return "Vendedor";
  }
  else
  {
   return "Administrador";
  }
 }
?>
