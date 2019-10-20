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
            <div class="col-lg-4">
              <h4 class="card-title">Total de productos</h4>
            </div>
            </div><br>
           <div class="row">
             <div class="col-lg-5">
                 <form method="post" action="buscar.php">
                      <h3>Pedidos consolidados</h3>
                  <div class="form-group">
                  <input type="date" class="form-control" placeholder="Default input" id="inputDefault" name="fecha">
                  </div>
                  <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
                <hr>
                <h3>Pedidos individuales</h3>
                <form method="post" action="buscar.php">
                 <button type="button" class="btn btn-primary"><a href="individuales.php" style="color:#fff">Buscar</a></button>
               </form>
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
