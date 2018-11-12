<?php

require '../../all/conexion/conexion.php';
require 'funciones.php';

if(isset($_POST['btn-img']))
{

    $categoria = $_POST['categoria'];
    $nombre_img = $_POST['nombre_img'];
    $foto = $_FILES['img']['name'];
    $fotoSize = $_FILES['img']['size'];
    $ruta = $_FILES['img']['tmp_name'];
    $destino = "../fotos/".$foto;

    if($fotoSize > 8000000){
        echo '<script>
             alert("La imagen supera el tamaño permitido, elija una imagen de maximo 8Mb");
             window.location.href="index.php";
             </script>';
    }else{
    copy($ruta,$destino);
    $img = new FuncionesImg();
    $img -> ingresarImagen($conexion, $categoria, $nombre_img, $destino);
  }
}

if(isset($_POST['btn-pro']))
{

    $proveedor = $_POST['proveedor'];

    $sql = mysqli_query($conexion, "INSERT INTO proveedores (nombre) VALUES ('$proveedor')");

    if($sql)
    {

        echo
            "
                <script>
                alert('Proveedor guardado');
                window.location.href='index.php';
                </script>

            ";

    }
    else
    {

        echo 'ERROR';

    }

}
