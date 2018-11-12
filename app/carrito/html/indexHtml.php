<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-images"></i> Ingresar imagen de producto</div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Ref.</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">und</th>
                  <th scope="col">Subtotal</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

    <?php

    while($row = mysqli_fetch_array($consulta))
    {

    ?>

                <tr>
                  <th scope="row"><?php echo $row['referencia'] ?></th>
                  <td><?php echo $row['titulo'] ?></td>
                  <td><?php echo $row['cantidad_tmp'] ?></td>
                  <td><?php echo $row['precio_tmp'] ?></td>
                  <td><?php echo $row['precio_tmp'] * $row['cantidad_tmp'] ?></td>
                  <td><button type="button" class="btn btn-secondary" onclick="preguntarSiNo('<?php echo $row['id'] ?>')">X</button></td>
                </tr>


    <?php

    }

   ?>


            </tbody>
          </table>
           </div>
          </div>
        </div>
    </div><br><br><br><br><br><br>

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->
</div>
</body>
</html>
