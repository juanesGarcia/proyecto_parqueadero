<?php

session_start();

require_once(__DIR__ . "/../mdb/mdbUsuario.php");
require_once(__DIR__ . "/../../modelo/entidad/Usuario.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena1 = $_POST['contrasena1'];
$contrasena2 = $_POST['contrasena2'];

if ($nombre != "" and $correo != "" and $contrasena1 != "" and $contrasena2!= "" and $contrasena1 == $contrasena2 ) {

         $usuario = new Usuario(NULL,$nombre,$correo,$contrasena1);
        $registro = registrarUsuario($usuario);
        if ($registro)
            header("Location: ../../vista/user.php");
        else {

            header("Location: ../../vista/registrar.php");
        }
 } 
 else {

    header("Location: ../../vista/registrar.php");
}