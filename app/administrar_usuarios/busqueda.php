<?php

function buscarUsuarios($c){

    $sql = "SELECT * FROM usuarios";

    $resultado = mysqli_query($c, $sql);

    while($row = mysqli_fetch_array($resultado)){
        echo '
              <tr>
                <th>'.$row["nombre"].'</th>
                <td>'.$row["usuario"].'</td>
                <td>'.$row["telefono"].'</td>
                <td>'.rol($row["rol"]).'</td>
              </tr>
             ';
    }
}

function rol($r){
    if($r == 1){
        return "Vendedor";
    }else if($r == 2){
        return "Cliente";
    }else{
        return "Administrador";
    }
}

?>
