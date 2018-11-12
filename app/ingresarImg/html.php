<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-images"></i> Ingresar imagen de producto</div>
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-5">
              <h4 class="card-title">Ingresar imagen de producto</h4>
            </div>
            </div><br>
           <form action="model.php" method="post" enctype="multipart/form-data">
           <div class="row justify-content-center">
            <div class="col-lg-3">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ingrese una categoria" id="inputDefault" name="categoria" required>
                    </div>
              </div>
              <div class="col-lg-3">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nombre de imagen" id="inputDefault" name="nombre_img" required>
                    </div>
              </div>
              <div class="col-lg-3">
                    <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02" name="img" accept="image/jpeg, image/x-png">
                            <label class="custom-file-label" for="inputGroupFile02">JPG / PNG</label>
                          </div>
                        </div>
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
