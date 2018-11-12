<?php
error_reporting(0);
session_start();

$permisos = $_SESSION['permisos_usuario'];

if($permisos == 1 || $permisos == 2){
  header("location:../../index.php?view=catalogo");
}

require 'html/indexHtml.php';
