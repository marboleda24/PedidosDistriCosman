<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-project-diagram"></i> Gestionar Productos</div>
          <div class="card-body" style="overflow:auto; height:350px">
            <div class="row">
            <div class="col-lg-4">
              <h4 class="card-title">Gestión de Pedidos</h4>
            </div>
            </div><br>
           <div class="row">
             <div class="col-lg-12">

                 <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Fecha</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Cambiar estado</th>
                  <th scope="col">Estado</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>


           <?php

              while($row = mysqli_fetch_array($consulta)){

            ?>
              <form action="model.php" method="post">
                <tr>
                  <td><?php  echo $row['fecha'] ?></td>
                  <td><?php  echo $row['estado'] ?></td>
                  <td>

                    <select class="form-control" id="exampleSelect1" name="autorizar">
                        <option value="Aprobado">Aprobado</option>
                        <option value="Desaprobado">No aprobado</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>"

                  </td>
                  <td><button type="submit" class="btn btn-primary">Actualizar</button></td>
                  <td><a href="pedido.php?id_pedido=<?php echo $row['id'] ?>">Ver Pedido</a></td>
                </tr>
              </form>

           <?php

              }

           ?>


              </tbody>
            </table>

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
