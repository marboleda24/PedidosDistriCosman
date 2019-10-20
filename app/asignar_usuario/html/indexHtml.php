<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php' ?>

<div class="jumbotron">
<div class="row justify-content-center">

<!--------INGRESAR CLIENTE---------------------->

    <div class="col-lg-4">
        <div class="card border-dark mb-3">
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-12">
              <h4 class="card-title">Ingresar Cliente</h4>
            </div>
            </div><br>
           <form action="model.php" method="post" enctype="multipart/form-data">
           <div class="row justify-content-center">
            <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ingrese el nombre" id="inputDefault" name="nombre" required>
                    </div>
              </div>
              <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Numero Documento" id="inputDefault" name="documento" required>
                    </div>
              </div>
              <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Telefono" id="inputDefault" name="telefono" required>
                    </div>
              </div>
              <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Direccion" id="inputDefault" name="direccion" required>
                    </div>
              </div>
              <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Barrio" id="inputDefault" name="barrio" required>
                    </div>
              </div>
              <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Ciudad" id="inputDefault" name="ciudad" required>
                      <input type="hidden" value="1" class="form-control" id="inputDefault" name="rol">
                    </div>
              </div>
              <div class="col-lg-12">
                    <br>
                   <button type="submit" class="btn btn-primary" name="btn-c"><i class="fas fa-save"></i> Guardar</button>
              </div>
              </div>
            </form>
           </div>
          </div>
        </div>

        <!--------------INGRESAR VENDEDOR------------------------->

        <div class="col-lg-4">
        <div class="card border-dark mb-3">
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-12">
              <h4 class="card-title">Ingresar Vendedor</h4>
            </div>
            </div><br>
            <form action="model.php" method="post" enctype="multipart/form-data">
              <div class="row justify-content-center">
               <div class="col-lg-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Ingrese el nombre" id="inputDefault" name="nombre" required>
                       </div>
                 </div>
                 <div class="col-lg-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Numero Documento" id="inputDefault" name="documento" required>
                       </div>
                 </div>
                 <div class="col-lg-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Telefono" id="inputDefault" name="telefono" required>
                       </div>
                 </div>
                 <div class="col-lg-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Direccion" id="inputDefault" name="direccion" required>
                       </div>
                 </div>
                 <div class="col-lg-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Barrio" id="inputDefault" name="barrio" required>
                       </div>
                 </div>
                 <div class="col-lg-12">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="Ciudad" id="inputDefault" name="ciudad" required>
                         <input type="hidden" value="2" class="form-control" placeholder="Ciudad" id="inputDefault" name="rol">
                       </div>
                 </div>
                 <div class="col-lg-12">
                       <br>
                      <button type="submit" class="btn btn-primary" name="btn-c"><i class="fas fa-save"></i> Guardar</button>
                 </div>
                 </div>
               </form>
           </div>
          </div>
        </div>

        <!--------------INGRESAR ADMINISTRADOR------------------------->

        <div class="col-lg-4">
        <div class="card border-dark mb-3">
          <div class="card-body">
            <div class="row justify-content-center">
            <div class="col-lg-12">
              <h4 class="card-title">Ingresar Adiministrador</h4>
            </div>
            </div><br>
           <form action="model.php" method="post" enctype="multipart/form-data">
             <div class="row justify-content-center">
              <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ingrese el nombre" id="inputDefault" name="nombre" required>
                      </div>
                </div>
                <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Numero Documento" id="inputDefault" name="documento" required>
                      </div>
                </div>
                <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Telefono" id="inputDefault" name="telefono" required>
                      </div>
                </div>
                <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Direccion" id="inputDefault" name="direccion" required>
                      </div>
                </div>
                <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Barrio" id="inputDefault" name="barrio" required>
                      </div>
                </div>
                <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ciudad" id="inputDefault" name="ciudad" required>
                        <input type="hidden" value="3" class="form-control" placeholder="Ciudad" id="inputDefault" name="rol">
                      </div>
                </div>
                <div class="col-lg-12">
                      <br>
                     <button type="submit" class="btn btn-primary" name="btn-a"><i class="fas fa-save"></i> Guardar</button>
                </div>
                </div>
              </form>
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
