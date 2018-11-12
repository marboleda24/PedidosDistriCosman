<?php

include('config.php');
$conexion = mysqli_connect(SERVIDOR,USUARIO,PASS,BD);
mysqli_set_charset($conexion,'utf8');

if(!$conexion){
    echo "ERROR al conectarse a la base de datos";
}
