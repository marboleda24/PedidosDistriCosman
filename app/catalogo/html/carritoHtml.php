
<div class="modal" id="lista">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Productos seleccionados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div id="datos">

              </div>
              <div class="modal-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Ref.</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">und</th>
                  <th scope="col">Subtotal</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

    <?php

    while($row = mysqli_fetch_array($consulta))
    {

    ?>

                <tr>
                  <th scope="row"><?php echo $row['referencia'] ?></th>
                  <td><?php echo $row['titulo'] ?></td>
                  <td><?php echo $row['cantidad_tmp'] ?></td>
                  <td><?php echo $row['precio_tmp'] ?></td>
                  <td><?php echo $row['precio_tmp'] * $row['cantidad_tmp'] ?></td>
                  <td><button type="button" class="btn btn-secondary" onclick="preguntarSiNo('<?php echo $row['id'] ?>')">X</button></td>
                </tr>


    <?php

    }

   ?>


            </tbody>
          </table>
          </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary"><a href="../seleccion/" style="color:#fff;text-decoration:none">Continuar</a></button>
              </div>
            </div>
          </div>
        </div>
