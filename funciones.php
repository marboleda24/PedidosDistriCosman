<?php

class Funciones
{
    
    #$resultado = array();
    
    static function select($query)
    {
        
        $consulta = mysqli_query($conexion, "SELECT * FROM $query");
        return $resultado;
        
    }
    
    static function select($query, $where)
    {
        
        $consulta = mysqli_query($conexion, "SELECT * FROM $query WHERE $where");
        return $consulta;
        
    }
    
    static function actualizar($query, $campo, $dato, $id)
    {
        
        $consulta = mysqli_query($conexion, "UPDATE $query set $campo = '$dato' WHERE id = '$id'");
        
    }
    
    static function actualizar($query, $id)
    {
        
        $consulta = mysqli_query($conexion, "DELETE FROM $query WHERE $id =  '$id'");
        
    }
    
}