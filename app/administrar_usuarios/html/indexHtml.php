<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-3">

        <!-- cambiar clave de usuario formulario --->

        <div class="card border-dark mb-3">
          <div class="card-header">Cambiar clave de usuario</div>
          <div class="card-body">
           <form action="model.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
               <input type="text" class="form-control" placeholder="Usuario" id="inputDefault" name="usuario">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Contraseña" id="inputDefault" name="pass">
               </div>
              <button type="submit" class="btn btn-primary" name="cambiarClave"><i class="fas fa-save"></i> Guardar</button>
            </form>
           </div>
          </div>

          <!-- fin formulario cambio de clave -->

          <!-- formula para Habilitar o deshabilitar usuario --->
          <div class="card border-dark mb-3">
            <div class="card-header">Habilitar / Deshabilitar usuario</div>
            <div class="card-body">
             <form action="model.php" method="post" enctype="multipart/form-data">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Usuario" id="inputDefault" name="usuario">
                </div>
                <button type="submit" class="btn btn-danger" name="deshabilitar">Desabilitar</button>
                <button type="submit" class="btn btn-success" name="habilitar">Habilitar</button>
              </form>
             </div>
            </div>

            <!-- fin formulario -->
        </div>

        <!-- listado de usuarios -->

    <div class="col-lg-9">
        <div class="card border-dark mb-3" style="height:450px;">
          <div class="card-header">Usuarios</div>
          <div class="card-body">
            <!-- <form action="index.php" method="post">
              <div class="col-lg-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuario" id="inputDefault" name="busqueda">
               </div>
               <button type="submit" class="btn btn-info" name="btn-img"><i class="fas fa-search" name="btn-busqueda"></i> Buscar</button>
             </div>
         </form>-->
             <div style="height:350px;overflow:scroll">
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Rol</th>
                  </tr>
                </thead>
                <tbody style="max-height:1050px;overflow:scroll">
                    <?php
                        require 'resultado.php';
                    ?>
                </tbody>
              </table>
           </div>
         </div>
          </div>
        </div>
    </div>

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->
</div>
</body>
</html>
