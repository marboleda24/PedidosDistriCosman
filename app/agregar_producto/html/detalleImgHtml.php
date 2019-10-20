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
              <div class="col-lg-4">
              <div class="card mb-3">
                  <img style="height: 200px; width: 100%; display: block;" src="<?php echo $img ?>" alt="Card image">
                </div>
              </div>
              <div class="col-lg-8">
                  <h3>PRODUCTOS ASOCIADOS</h3>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Ref.</th>
                          <th scope="col">Titulo</th>
                          <th scope="col">Precio</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php while($resultado = mysqli_fetch_array($consulta)) {

                         $datos = $resultado['id_producto']."||".
                                  $resultado['titulo']."||".
                                  $resultado['referencia']."||".
                                  $resultado['precio'];

                     ?>

                          <tr>
                          <th scope="row">
                              <?php echo $resultado['referencia'] ?>
                          </th>
                          <td>
                              <?php echo $resultado['titulo'] ?>
                          </td>
                          <td>
                              $<?php echo $resultado['precio'] ?>
                          </td>
                         <td>
                             <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#actualizar" onclick="agregaform('<?php echo $datos ?>')" title="Actualizar">
                             <i class="fas fa-pen-square"></i>
                             </button>
                             <!--<button type="button" class="btn btn-success" onclick="preguntarSiNo('<?php #echo $resultado['id_producto'] ?>')" title="Eliminar">
                             <i class="fas fa-trash"></i>
                           </button>-->
                         </td>

                          </tr>

                          <?php } ?>

                     </tbody>
                  </table>

              </div>
              </div>
           </div>
          </div>

        <!---modal ACTUALIZAR----->

        <div class="modal" id="actualizar">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Actualizar datos de imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-form-label" for="inputDefault">Referencia</label>
                  <input type="text" class="form-control" placeholder="" id="referencia" name="referencia" disabled>
                  <label class="col-form-label" for="inputDefault">Titulo</label>
                  <input type="text" class="form-control" placeholder="" id="titulo" name="titulo">
                  <label class="col-form-label" for="inputDefault">Precio</label>
                  <input type="text" class="form-control" placeholder="" id="precio" name="precio">
                  <input type="text" hidden="" id="id" name="id">
                  <!--<label for="estado">Estado</label>
                  <select class="form-control" id="estado" name="estado">
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                  </select>-->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Guardar Cambios</button>
              </div>
            </div>
          </div>
        </div>

        <!----fin modal ACTUALIZAR------>

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->

        </div>
    </div>
</div>
</body>
</html>
<script src="ajax/actualizar/ajaxActualizar.js"></script>
<script src="ajax/eliminar/ajaxEliminar.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $('#actualizadatos').click(function(){

       actualizaDatos();

    });

});

</script>
