<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre = filter_input(INPUT_POST,'nombre');
        $correo = filter_input(INPUT_POST,'correo');
        $contrasena = filter_input(INPUT_POST,'contrasena');
 
        
        $usuario = new usuario(NULL, NULL, $nombre, $correo, $contrasena);
        $estado  = registrarUsuario($usuario);
        $msg="Se logró registrar el usuario";
       
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    
    echo json_encode($resultado);
