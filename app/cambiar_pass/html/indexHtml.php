<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header">Cambiar contraseña</div>
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4 class="card-title">Ingresar una nueva contraseña</h4>
            </div>
            </div><br>
           <form action="model.php" method="post" enctype="multipart/form-data">
           <div class="row justify-content-center">
            <div class="col-lg-3">
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Ingrese una contraseña" id="inputDefault" name="pass" id="">
                    </div>
              </div>
              <div class="col-lg-2">
                   <button type="submit" class="btn btn-primary" name="btn-img"><i class="fas fa-save"></i> Guardar</button>
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
