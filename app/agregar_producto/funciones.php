<?php
#hapy nation
class FuncionesProductos
{

    function mostrar_fotos($con)
    {

        #if($where)


            #$consulta = mysqli_query($con, "SELECT * FROM img WHERE categoria LIKE '%".$where."%' || nombre_img LIKE '%".$where."%'");

            $consulta = mysqli_query($con, "SELECT * FROM img WHERE deshabilitar = '0'");

            return $consulta;


        /*else
        {

            $consulta = mysqli_query($con, "SELECT * FROM img");

            return $consulta;

        }*/


    }

    function fotos_deshabilitadas($con)
    {

            $consulta = mysqli_query($con, "SELECT * FROM img WHERE deshabilitar = '1'");

            return $consulta;

    }

    function mostrar_detalle($con, $id)
    {

        $consulta = mysqli_query($con, "SELECT * FROM productos WHERE id_img = '$id'");

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


}
