<?php

class FuncionesCatalogo
{

    function mostrar_fotos($con, $where)
    {

        if($where)
        {

            $consulta = mysqli_query($con, "SELECT * FROM img WHERE categoria LIKE '%".$where."%' || nombre_img LIKE '%".$where."%'");

            return $consulta;

        }
        else
        {

            $resultado = mysqli_query($con, "SELECT * FROM img");

            return $resultado;

        }


    }

    function mostrar($con)
    {

            $consulta = mysqli_query($con, "SELECT * FROM img WHERE deshabilitar = '0'");

            return $consulta;

    }

    function mostrar_detalle($con, $id)
    {

        $consulta = mysqli_query($con, "SELECT * FROM productos WHERE id_img = '$id' AND estado = '1'");

        return $consulta;

    }

    function agregar_producto($con, $id_img, $titulo, $referencia)
    {

        $consulta = mysqli_query($con, "INSERT INTO productos (id_img,titulo,referencia) VALUES ('$id_img','$titulo','$referencia')");

    }

    function eliminar_producto($con, $id)
    {

        $consulta = mysqli_query($con, "DELETE FROM productos WHERE id_producto = '$id'");

    }

    function tmp($con, $id_producto, $titulo, $cantidad, $valor, $referencia, $session_id)
    {

        $sql = mysqli_query($con, "INSERT INTO tmp (id_producto, titulo, cantidad_tmp, precio_tmp, referencia, session_id) VALUES ('$con','$id_producto','$titulo','$cantidad','$valor','$referencia','$session_id')");

    }


}
