<?php require '../../all/overall/header.php'; ?>

<body class="inicio">

<?php  require '../../all/overall/menu.php'; ?>

<div class="jumbotron">

<div class="row justify-content-center" overflo>
    <div class="col-lg-9">

<?php

$contador = 0;

while($r = mysqli_fetch_array($result))
{

    $id = $r['id'];
    $nombre_pro = $r['nombre'];
    $nombre_en = $r['encargado'];

    $sql = "SELECT detalle.id_producto, detalle.titulo, SUM(detalle.cantidad) AS resultado, pedidos.estado, pedidos.fecha FROM detalle, pedidos WHERE pedidos.id = detalle.id_pedido AND detalle.proveedor ='$id' AND pedidos.fecha = '$fecha' AND pedidos.estado ='$estado' GROUP BY detalle.id_producto, detalle.titulo";

    $consul = mysqli_query($conexion, $sql);

    echo '<div class="card border-primary mb-3">
          <div class="card-header">'.$nombre_pro.' / '.$nombre_en.'</div>
          <div class="card-body">';

    while($t = mysqli_fetch_array($consul))
    {
        $contador++;
        echo ' <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Producto</th>
                      <th scope="col">Cantidad</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-active">
                      <td>'.$t["titulo"].'</td>
                      <td>'.$t["resultado"].'</td>
                    </tr>
                   </tbody>
                 </table>';

    }

    echo '  </div>
            </div>';

}

?>

    </div>


    </div>

        <?php if($contador > 0){ ?>

            <center>  <a href="exportar/exportar.php?fecha=<?php echo $fecha ?>"><button type="button" class="btn btn-primary">Exportar</button></a>  </center>

        <?php } ?>


</div>
    <!--modal cerrar session-------->

    <?php  require '../../all/overall/cerrarSession.php'; ?>

    <!-------fin modal cerrar session---------->
</body>
</html>
