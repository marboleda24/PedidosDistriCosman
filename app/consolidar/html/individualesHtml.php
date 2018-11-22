<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>
    
<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3">
          <div class="card-header"><i class="fas fa-project-diagram"></i> Gestionar Productos</div>
          <div class="card-body"  style="overflow:auto;height:400px">
           <div class="row"> 
             <div class="col-lg-12">
             <h4>Pedidos pendientes por despachar</h4>
             <br>
             <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Cliente</th>
                  <th scope="col">Fecha</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  
                  
           <?php
                  
              while($row = mysqli_fetch_array($individuales)){    
                  
            ?>
              <form action="model.php" method="post">
                <tr>
                  <td><?php  echo $row['cliente'] ?></td>
                  <td><?php  echo $row['fecha'] ?></td>
                  <td><a href="pedido.php?id_pedido=<?php echo $row['id'] ?>">Ver Pedido</a></td>
                </tr>
              </form>
                  
           <?php
                  
              }
                  
           ?>
                  
                  
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