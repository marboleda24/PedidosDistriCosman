<?php

require '../../../all/conexion/conexion.php';

session_start();

$fecha = $_GET['fecha'];
$id = $_SESSION['id_usuario'];
$estado = 'Aprobado';
$accion = 'pendiente';

$filename = "Pedido.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Content-Type: application/vnd.ms-excel'); // This should work for IE & Opera
header('Content-type: application/x-msexcel');

echo '<h2>PEDIDOS DE: ' .$fecha. '</h2>';

$id_pro = "SELECT * FROM proveedores";
$result = mysqli_query($conexion, $id_pro);

while($r = mysqli_fetch_array($result))
{

    $id = $r['id'];
    $nombre_pro = $r['nombre'];
    $nombre_en = $r['encargado'];


    $sql = "SELECT detalle.id_producto, detalle.titulo, SUM(detalle.cantidad) AS resultado, pedidos.estado, pedidos.fecha FROM detalle, pedidos WHERE pedidos.id = detalle.id_pedido AND detalle.proveedor ='$id' AND pedidos.fecha = '$fecha' AND pedidos.estado ='$estado' GROUP BY detalle.id_producto, detalle.titulo";

    $consult = mysqli_query($conexion, $sql);

    echo '<p><b>'.strtoupper($nombre_pro).'</b> Encargado: '. $nombre_en.'</p>';

    while ($rows = mysqli_fetch_array($consult)) {
      echo '<table width="500px">
              <tr>
                <td><b>Producto</b></td>
                <td><b>Cantidad</b></td>
              </tr>
              <tr>
                <td>'.$rows["titulo"].'</td>
                <td>'.$rows["resultado"].'</td>
              </tr>
            </table>';
    }

  }

  mysqli_close($conexion);

 ?>
