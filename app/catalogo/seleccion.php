    <?php

    $id = intval($_SESSION['id_usuario']);

    $sql = "SELECT * FROM tmp WHERE id_usuario = $id ORDER BY id  DESC";
    $consulta = mysqli_query($conexion, $sql);

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
