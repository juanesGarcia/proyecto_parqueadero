<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');

    $idusuario = $_SESSION['ID_USUARIO'];

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['contrasena'];

   if($nombre!=NULL && $correo!=NULL && $contrasena!=NULL){
       $user = new Usuario(NULL,$nombre, $correo, $contrasena,NULL);
       editarUsuario($user);
       echo 1;
    }
    else{
        echo 0;
    }
        