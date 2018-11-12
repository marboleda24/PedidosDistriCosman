<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
  <!-- --------------------Filtro-----------------------------------------------------------
    <div class="col-lg-3">
         <form action="index.php" method="post">
          <div class="card border-primary mb-3" style="max-width: 20rem;">
              <div class="card-header"><i class="fas fa-filter"></i> Filtro</div>
                <form action="index.php" method="post">
                  <div class="card-body">
                       <div class="form-group">
                         <label for="exampleSelect1">categoria o nombre de imagen</label>
                         <input type="text" class="form-control" placeholder="" id="inputDefault" name="where">
                        </div>
                        <button type="submit" class="btn btn-info" name="categoria"><i class="fas fa-search"></i> Buscar</button>
                  </div>
              </form>
            </div>
        </form>
    </div>
  ------------------------------------------------------------------------------------------------>
    <div class="col-lg-12">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-th-large"></i> Catalogo</div>
          <div class="card-body">
            <div class="row">
            <div class="col-lg-8">
              <h4 class="card-title">Productos</h4>
            </div>
            <div class="col-lg-4" style="text-align: right">
              <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lista"><i class="fas fa-cart-arrow-down"></i> Pedido</button>-->
            </div>
            <div class="col-lg-4" style="text-align: right">
            </div>
            </div><br>
           <div class="row"  style="overflow:auto; height:500px">

        <?php while($row = mysqli_fetch_array($consulta)) { ?>

              <div class="col-lg-3">
              <div class="card mb-3">
                  <a href="detalleImg.php?id=<?php echo $row['id_img'] ?>&img=<?php echo $row['img'] ?>"><img style="height: 200px; width: 100%; display: block;" src="<?php echo $row['img'] ?>"></a>
                </div>
              </div>

        <?php }?>


              </div>
                <!--<div>
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link" href="#">&laquo;</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">&raquo;</a>
                    </li>
                  </ul>
                </div>-->
           </div>
          </div>
        </div>
    </div>
</div>

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->
</body>
</html>

<script src="ajax/agregarProducto/ajaxAgregar.js"></script>
