<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-project-diagram"></i> Gestionar Productos</div>
          <div class="card-body">
            <div class="row">
            <div class="col-lg-4">
              <h4 class="card-title">Gestión de Pedidos</h4>
            </div>
            </div><br>
           <div class="row">
             <div class="col-lg-12">

                 <table class="table table-hover" style="overflow:auto; height:40px">
              <thead>
                <tr>
                  <th scope="col">Fecha</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Cliente</th>
                </tr>
              </thead>
              <tbody>


           <?php

              while($row = mysqli_fetch_array($consulta)){

            ?>
                <tr>
                  <td><?php  echo $row['fecha'] ?></td>
                  <td><?php  echo $row['estado'] ?></td>
                  <td><?php  echo $row['cliente'] ?></td>
                </tr>

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
