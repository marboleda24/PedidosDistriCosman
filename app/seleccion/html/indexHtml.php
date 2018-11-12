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
              <div class="col-lg-8">
                 <!-- <h3>PRODUCTOS SELECCIONADOS</h3>-->
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Ref.</th>
                          <th scope="col">Titulo</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                          $total = 0;

                          while($resultado = mysqli_fetch_array($consulta)) {

                           $total += $resultado['subtotal'];

                       ?>

                          <tr>
                          <th scope="row">
                              <?php echo $resultado['referencia'] ?>
                          </th>
                          <td>
                              <?php echo $resultado['titulo'] ?>
                          </td>
                          <td>
                              <?php echo $resultado['cantidad_tmp'] ?>
                          </td>
                          <td>
                              $<?php echo $resultado['precio_tmp'] ?>
                          </td>
                          <td>
                              <?php echo $resultado['cantidad_tmp'] * $resultado['precio_tmp'] ?>
                          </td>

                          </tr>

                          <?php } ?>

                     </tbody>
                  </table>

              </div>
            <div class="col-lg-4">
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                <form action="model.php" method="get">
                  <div class="card-body">
                    <h4 class="card-title">Total:<br><br> $ <?php echo $total ?></h4><br>
                    <div class="form-group">
                      <label class="col-form-label" for="inputDefault">(*)Ingrese cedula</label>
                      <input type="text" class="form-control" placeholder="Documento del cliente" name="cliente" id="documento" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="confirmar" value="1">Confirmar Pedido</button>
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="guardar" value="2">Guardar Pedido</button>
                  </div>
                </form>
                </div>
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

    <script>

    var documento = $('#documento').val;

    function documento(){


    }

    </script>


</body>
</html>
<!--

                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="accion" class="custom-control-input" value="confirmar">
                          <label class="custom-control-label" for="customRadio1">Confirmar pedido</label>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="accion" class="custom-control-input" value="guardar">
                          <label class="custom-control-label" for="customRadio1">Guardar pedido</label>
                        </div>
                        </div>
                      </div>-->
