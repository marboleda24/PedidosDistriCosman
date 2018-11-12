<?php

class FuncionesImg
{
    
    function ingresarImagen($con, $c, $n, $i)
    {
        
        $sql = mysqli_query($con, "INSERT INTO img (categoria, nombre_img, img) VALUES ('$c','$n','$i')" );
        
        if($sql)
        {
            
            echo 
            "
                <script>
                alert('Imagen guardada');
                window.location.href='index.php';
                </script>
            
            ";
            
        }
        else
        {
            
            echo ERROR;
            
        }
        
    }
    
}