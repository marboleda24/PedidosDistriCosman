<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-project-diagram"></i> Borradores</div>
          <div class="card-body">
            <div class="row">
            </div><br>
           <div class="row">
              <div class="col-lg-12" style="overflow:auto; height:300px">
                  <h4>Pedidos guardados:</h4><br>

        <?php

                  while($row = mysqli_fetch_array($sql)){

        ?>


                    <div class="card border-primary mb-3">
                      <div class="card-body">
                        Guardado el <?php echo $row['fecha'] ?><br>
                        <a href="borrador.php?id_pedido=<?php echo $row['id'] ?>">Ver mas</a>
                      </div>
                    </div>


        <?php

                  }

        ?>


              </div>
              </div>
           </div>
          </div>

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->

        </div>
    </div>
</div>
</body>
</html>
