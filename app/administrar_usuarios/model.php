<?php

    require '../../all/conexion/conexion.php';

    session_start();

    if(isset($_POST['cambiarClave'])){
        $id = $_POST['usuario'];
        $pass = md5($_POST['pass']);
        $existe = verificarUsuario($conexion, $id);
        if($existe){
            $sql = "UPDATE usuarios SET pass = '$pass' WHERE id = '$id'";
            $query = mysqli_query($conexion, $sql);
            if($query){
                    echo
                        "
                            <script>
                            alert('Contraseña actualizada');
                            window.location.href='index.php';
                            </script>
                        ";
            }
        }else{
                echo
                    "
                        <script>
                        alert('Usuario no existe');
                        window.location.href='index.php';
                        </script>
                    ";
        }
    }

    if(isset($_POST['deshabilitar'])){
        $usuario = $_POST['usuario'];
        $estado = 0;//estado 0 para usuarios inhabilitados para ingresar al sistema//
        $existe = verificarUsuario($conexion, $usuario);
        if($existe){
            $sql = "UPDATE usuarios SET estado = '$estado' WHERE usuario = '$usuario'";
            $query = mysqli_query($conexion, $sql);
                    if($query){
                        echo
                            "
                                <script>
                                alert('Usuario deshabilitado');
                                window.location.href='index.php';
                                </script>
                            ";
                    }
        }else{
                        echo
                            "
                                <script>
                                alert('Usuario no existe');
                                window.location.href='index.php';
                                </script>
                            ";
        }
    }

    if(isset($_POST['habilitar'])){
        $usuario = $_POST['usuario'];
        $estado = 1;//estado 1 para usuarios habilitados para ingresar al sistema//
        $existe = verificarUsuario($conexion, $usuario);
        if($existe){
            $sql = "UPDATE usuarios SET estado = '$estado' WHERE usuario = '$usuario'";
            $query = mysqli_query($conexion, $sql);
                    if($query){
                        echo
                            "
                                <script>
                                alert('Usuario habilitado');
                                window.location.href='index.php';
                                </script>
                            ";
                    }
        }else{
                        echo
                            "
                                <script>
                                alert('Usuario no existe');
                                window.location.href='index.php';
                                </script>
                            ";
        }

    }

    #funcion para verificar que existe el usuario

    function verificarUsuario($c, $u){
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$u' OR id = '$u'";
        $ejecutar = mysqli_query($c, $consulta);
        $resultado = mysqli_num_rows($ejecutar);
        if($resultado == 1){
            return true;
        }else{
            return false;
        }
    }
