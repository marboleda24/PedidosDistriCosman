<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header">Activar o Desactivar un producto</div>
          <div class="card-body">
             <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Ref.</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Estado</th>
                </tr>
              </thead>
              <tbody>

                  <?php

                  while($r = mysqli_fetch_array($resultado)){

                  ?>

                <tr class="table-primary">
                  <th scope="row"><?php echo $r['referencia']; ?></th>
                  <td><?php echo $r['titulo']; ?></td>
                  <td><?php echo $r['precio']; ?></td>
                  <td><?php  echo $estado = ($r['estado']==1)? 'Activo' : 'Inactivo' ; ?></td>
                  <td><a href="activar_model.php?id=<?php echo $r['id_producto'] ?>"><button type="button" class="btn btn-outline-info">Desactivar/Activar</button></a></td>
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


    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->

</div>
</body>
</html>
