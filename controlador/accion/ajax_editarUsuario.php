<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');

    $idusuario = $_SESSION['ID_USUARIO'];

    $nombre = filter_input(INPUT_POST,'nombre');
    $correo = filter_input(INPUT_POST,'correo');
    $contrasena = filter_input(INPUT_POST,'contrasena');

   if((!empty($nombre)) && (!empty($correo)) && (!empty($contrasena))){
       $user = new Usuario($idusuario, NULL, $nombre, $correo, $contrasena);
       editarUsuario($user);
       echo 1;
    }
    else{
        echo 0;
    }
        