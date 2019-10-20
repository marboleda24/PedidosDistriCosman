<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">
<div class="row justify-content-center">

  <!-- filtro
    <div class="col-lg-3">
         <form action="index.php" method="post">
          <div class="card border-primary mb-3" style="max-width: 20rem;">
              <div class="card-header"><i class="fas fa-filter"></i> Filtro</div>
                <form action="index.php" method="post">
                  <div class="card-body">
                       <div class="form-group">
                         <label for="exampleSelect1">categoria o nombre de imagen</label>
                         <input type="text" class="form-control" placeholder="" id="inputDefault" name="where">
                        </div>
                        <button type="submit" class="btn btn-info" name="categoria"><i class="fas fa-search"></i> Buscar</button>
                  </div>
              </form>
            </div>
        </form>
    </div>

  -->

    <div class="col-lg-12">
        <div class="card border-dark mb-3" style="overflow:auto;height:400px">
          <div class="card-header"><i class="fas fa-plus"></i> Agregar Producto</div>
          <div class="card-body">

              <div class="row">
            <div class="col-lg-8">
              <h4 class="card-title">Imagenes deshabilitadas</h4>
            </div>
            </div><br>
           <div class="row">

        <?php

         while($row = mysqli_fetch_array($consulta)){

          $id_img = $row['id_img'];

       ?>
        <div class="col-lg-3">
          <form action="model.php" method="post">
                <div class="card mb-3">
                  <a href="habilitar.php?img=<?php echo $id_img ?>"><button type="button" class="btn btn-info">Habilitar Imagen</button></a>
                  <a href="detalleImg.php?id=<?php echo $id_img ?>&img=<?php echo $row['img'] ?>"><img style="height: 200px; width: 100%; display: block;" src="<?php echo $row['img'] ?>"></a>
                  <div class="card-body">
                  <p>Imagen: <?php echo $row['nombre_img'] ?></p>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ing_producto" onclick="agregaproductos('<?php echo $id_img ?>')"><i class="fas fa-database"></i> Agregar Producto</button>
                    <!--<p class="card-text">Agregar Producto</p>
                    <p class="card-text"><input class="form-control form-control-sm" type="text" placeholder="Titulo" id="inputSmall" name="titulo" id="titulo"></p>
                    <p class="card-text"><input class="form-control form-control-sm" type="text" placeholder="Referencia" id="referencia" name="referencia"></p>
                    <input type="hidden" value="<?php echo $row['id_img'] ?>" name="id_img" id="id_img">
                    <button type="button" class="btn btn-primary" name="btn-agregar" onclick="ingresar" id="ingresadatos">Agregar</button>-->
                  </div>
                </div>
           </form>
        </div>

        <?php

         }

        ?>

              </div>
           </div>
          </div>
        </div>
    </div>

    <!--- ventana modal ------->

    <div class="modal" id="ing_producto">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><i class="fas fa-database"></i> Agregar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="card-text"><input class="form-control form-control-sm" type="text" placeholder="Titulo" id="titulo" name="titulo" id="titulo" required></p>
            <input type="text" hidden="" id="id_img">
            <p class="card-text"><input class="form-control form-control-sm" type="text" placeholder="Referencia" id="referencia" name="referencia" required></p>
            <p class="card-text"><input class="form-control form-control-sm" type="text" placeholder="Precio" id="precio" name="precio" required></p>
            <!--<p class="card-text"><input class="form-control form-control-sm" type="text" placeholder="Proveedor" id="proveedor" name="proveedor"></p>-->
            <p>
              <label for="exampleSelect1">Proveedor</label>
              <select class="form-control" id="proveedor" name="proveedor">
              <option value="0">Seleccionar</option>
    <!----------------- php --------------------------------------->

             <?php
               $sql = "SELECT * FROM proveedores";
               $consulta = mysqli_query($conexion, $sql);
               while($row = mysqli_fetch_array($consulta)){
             ?>

                <option value="<?php echo $row['id'] ?>" ><?php echo $row['nombre'] ?></option>

            <?php } ?>

   <!--------------------- php --------------------------------------->

              </select>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="ingresaproducto"><i class="fas fa-save"></i> Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <!------- fin ventana modal -------->

    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->

</div>
</body>
</html>
<script src="ajax/ingresar/ajaxIngresar.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $('#ingresaproducto').click(function(){

       ingresaProducto();

    });

});

</script>
