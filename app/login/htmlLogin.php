<?php require '../../all/overall/header.php'; ?>

<!html doctype>
<html>
<body class="inicio">

<div class="jumbotron" style="height:700px">
  <div class="row justify-content-center">
   <div class="col-lg-3" style="text-align:center">
     <h1>Districosman</h1>
      <i class="fas fa-user-circle fa-7x"></i>
       <form action="model.php" method="post">
        <div class="form-group"><br>
          <input type="text" class="form-control" placeholder="Ingrese su usuario" name="usuario" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Ingrese su clave" name="pass" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button><br>
        </form>
        <!-- mensaje -->

<?php
        if(isset($_GET['mensaje'])){

?>
            <div class="alert alert-dismissible alert-info">
              <strong>Heads up!</strong> Error en la autenticacion, valide sus credenciales.
            </div>

<?php
        }

 ?>

   </div>
  </div>
 </div>
</body>
</html>
