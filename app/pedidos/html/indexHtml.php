<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card border-dark mb-3" style="height:400px;">
          <div class="card-header"><i class="fas fa-search"></i> Buscar pedidos</div>
          <div class="card-body">
            <div class="row">
            <div class="col-lg-4">
            </div>
            </div>
           <div class="row">
            <form action="busqueda.php" method="post">
             <div class="col-lg-12">
               <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingrese documento" id="inputDefault" name="cedula">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
             </div>
            </form>
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
