<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3" style="height:300px">
          <div class="card-header"><i class="fas fa-images"></i> Agregar proveedor</div>
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-4">
              <h4 class="card-title">Agregar proveedor</h4>
            </div>
            </div><br>
           <form action="model.php" method="post">
           <div class="row justify-content-center">
              <div class="col-lg-5">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ingresar proveedor" id="inputDefault" name="proveedor" required>
                    </div>
              </div>
              <div class="col-lg-3">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Encargado" id="inputDefault" name="encargado" required>
                    </div>
              </div>
              <div class="col-lg-2">
                   <button type="submit" class="btn btn-primary" name="btn-pro"><i class="fas fa-save"></i> Guardar</button>
              </div>
              </div>
            </form>
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
