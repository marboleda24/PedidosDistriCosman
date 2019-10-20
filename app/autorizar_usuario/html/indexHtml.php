<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">

<?php

    while ($row = mysqli_fetch_array($consulta)) {

?>

<!-- inicio de tarjeta-->

        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-images"></i> Usuario pendiente por confirmar</div>
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-4">
              <h4 class="card-title"><?php echo $row['nombre'] ?></h4>
            </div>
            <a href="model.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-info">Autorizar</button></a>
            </div><br>
           <div class="row">
            <div class="col-lg-3">
                    <p><b>Cedula:</b> <?php echo $row['documento']?></p>
            </div>
            <div class="col-lg-3">
                    <p><b>Telefono:</b> <?php echo $row['telefono']?></p>
            </div>
            <div class="col-lg-3">
                    <p><b>Direccion:</b> <?php echo $row['direccion']?></p>
            </div>
            <div class="col-lg-3">
                    <p></b>Barrio:</b> <?php echo $row['barrio']?></p>
            </div>
            <div class="col-lg-3">
                    <p><b>Ciudad:</b> <?php echo $row['ciudad']?></p>
            </div>
              </div>
           </div>
          </div>

  <!-- fin de tarjeta -->

  <?php

}

      $fila = mysqli_num_rows($consulta);

      if($fila == 0){
      echo '<div class="alert alert-dismissible alert-warning">
                <h4 class="alert-heading">No hay en el momento usuarios pendientes por autorizar.</h4>
              </div>';

      }

 ?>

        </div>
    </div><br><br><br><br><br><br>

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->
</div>
</body>
</html>
