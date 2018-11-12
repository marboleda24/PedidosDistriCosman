<?php
session_start();

if($_SESSION['permisos_usuario'] == ''){
  session_destroy();
  header("location:../../index.php");
}
# 1 y 2 vendedor o cliente // 3 cliente

$usuario = $_SESSION['permisos_usuario'];

if($usuario == 1)
{

    require 'menu/menuCliente.php';

}
else if($usuario == 2)
{

    require 'menu/menuCliente.php';

}
else if($usuario == 3)
{

    require 'menu/menuAdmon.php';

}
