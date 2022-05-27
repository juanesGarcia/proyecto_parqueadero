<?php
//Con session_start() se puede iniciar una nueva sesión 
//o reanudar la sesión existente
session_start();

//Con require_once se incluye el archivo mdbUsuario.php
require_once(__DIR__ . "/../mdb/mdbUsuario.php");

//Se obtiene el correo y password del formulario del login,
//los datos son recibidos por el método POST
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
$user = autenticarUsuario($correo, $contrasena);

if ($user != null) {
    //Si el usuario fue encontrado, se guarda su ID en una sesión con $_SESSION

    if ($correo == 'admin@gmail.com' and $contrasena == 'admin') {
        $_SESSION['Id_USUARIO'] = $user->getIdusuario();
        $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
        $_SESSION['CORREO_USUARIO'] = $user->getCorreo();
        $_SESSION['CONTRASENA_USUARIO'] = $user->getContrasena();


        header("Location: ../../vista/admin.php");
    } else {
        $_SESSION['Id_USUARIO'] = $user->getIdusuario();
        $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
        $_SESSION['CORREO_USUARIO'] = $user->getCorreo();
        $_SESSION['CONTRASENA_USUARIO'] = $user->getContrasena();

        header("Location: ../../vista/user.php");
    }
} else {


    header("Location: ../../vista/index.php");
}
