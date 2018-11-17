<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>
    
<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-project-diagram"></i> Pedidos Guardados</div>
          <div class="card-body">
            <div class="row">
            <div class="col-lg-4">
              <h4 class="card-title">Borradores</h4>
            </div>
            </div><br>
           <div class="row"> 
              <div class="col-lg-8">
                 <!-- <h3>PRODUCTOS SELECCIONADOS</h3>-->
                  <table class="table table-hover">
                      <thead>
                        <tr>
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
                          <td>
                              <?php echo $resultado['titulo'] ?>
                          </td>
                          <td>
                              <?php echo $resultado['cantidad'] ?>
                          </td>
                          <td>
                              $<?php echo $resultado['precio'] ?>
                          </td>
                          <td>
                              <?php echo $resultado['subtotal']?>
                          </td>
                              
                          </tr>
                          
                          <?php } ?>
                          
                     </tbody>
                  </table>
    
              </div>
            <div class="col-lg-4">
                <div class="card border-primary mb-3" style="max-width: 20rem;">

                  <div class="card-body">
                    <h4 class="card-title">Total:<br><br> $ <?php echo $total ?></h4><br>
                    <button type="button" class="btn btn-primary btn-lg btn-block"><a href="model.php?accion=1&id=<?php echo $id_pedido ?>" style="text-decoration:none;color:#fff">Confirmar Pedido</a></button>
                    <button type="button" class="btn btn-danger btn-lg btn-block"><a href="model.php?accion=3&id=<?php echo $id_pedido ?>" style="text-decoration:none;color:#fff">Eliminar</a></button>
                  </div>
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
</body>
</html>