<?php
 /**
  * Vista login
  *
  * Formulario para loguear al usuario
  *
  * @author Deyner Steven Rendon Valladares <dsrendon@misena.edu.co>
  * @Editor Martin Arboleda <marboleda@solucionestics.com>
  * @Fecha Noviembre/12/2018
  * @FechaEdicion Noviembre/12/2018
  * @version 1
  */
 require '../../all/overall/header.php';
?>
<!DOCTYPE html>
<html>
 <body class="inicio">
  <div class="jumbotron" style="height:700px">
   <div class="row justify-content-center">
    <div class="col-lg-3" style="text-align:center">
     <a class="navbar-brand" href="../../app/web/">
      <img alt="Districosman" src="../../pagina_web/img/logo-districosman.png" style="width:100px;height:80px;" title="DistriCosman">
     </a>
     <form action="model.php" method="post">
      <div class="form-group">
       <input type="text" class="form-control" placeholder="Ingrese su usuario" name="usuario" required>
      </div>
      <div class="form-group">
       <input type="password" class="form-control" placeholder="Ingrese su clave" name="pass" required>
      </div>
      <div class="form-group">
       <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
      </div>
     </form>
     <!-- mensaje -->
     <?php if(isset($_GET['mensaje'])){ ?>
      <div class="alert alert-dismissible alert-info">
       <strong>Datos incorrectos!</strong> Error en la autenticación, valide sus credenciales.
      </div>
     <?php } ?>
    </div>
   </div>
  </div>
 </body>
</html>
