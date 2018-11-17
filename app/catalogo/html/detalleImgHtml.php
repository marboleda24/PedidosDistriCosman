<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header">productos</div>
          <div class="card-body">
            <div class="row">
            <div class="col-lg-8">
              <h4 class="card-title">Catalogo</h4>
            </div>
            <div class="col-lg-4" style="text-align: right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lista"><i class="fas fa-cart-arrow-down"></i> Pedido</button>
            </div>
            </div><br>
           <div class="row">
              <div class="col-lg-4">
              <div class="card mb-3">
                  <img style="height: 200px; width: 100%; display: block;" src="<?php echo $img ?>" alt="Card image">
                </div>
              </div>
              <div class="col-lg-8">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Ref.</th>
                          <th scope="col" WIDTH="170">Titulo</th>
                          <th scope="col">Precio</th>
                        </tr>
                      </thead>

                      <tbody>

                    <?php while($resultado = mysqli_fetch_array($consulta)){

                         $datos = $resultado['id_producto']."||".
                                  $resultado['titulo']."||".
                                  $resultado['precio']."||".
                                  $resultado['referencia']."||".
                                  $resultado['proveedor'];

                     ?>

                       <tr>
                          <th scope="row">
                              <?php echo $resultado['referencia'] ?>
                          </th>
                          <td>
                              <?php echo $resultado['titulo'] ?>
                          </td>
                          <td>$
                              <?php echo $resultado['precio'] ?>
                          </td>
                         <td WIDTH="90">
                              <input size="10" type="number" class="form-control" id="cantidad" value="1" min="1">
                              <input type="hidden" class="form-control" id="id_producto" value="<?php echo $resultado['id_producto']?>">
                              <input type="hidden" class="form-control" id="referencia">
                              <input type="hidden" class="form-control" id="titulo">
                              <input type="hidden" class="form-control" id="precio">
                              <input type="hidden" class="form-control" id="proveedor">
                         </td>
                         <td>
                             <button type="button" class="btn btn-primary" onclick="agregaform('<?php echo $datos ?>')"><span class="fas fa-cart-plus"></span></button>
                         </td>

                      </tr>

                     <?php } ?>

                     </tbody>
                  </table>
              </div>
              </div>
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
