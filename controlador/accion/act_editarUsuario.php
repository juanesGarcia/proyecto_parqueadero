<?php

session_start();

require_once(__DIR__ . '/../mdb/mdbUsuario.php');

$idUsuario = $_SESSION['ID_USUARIO'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['contrasena'];



if ($nombre != "" and $correo != "" and $password != "" ) {

    $usuario = new Usuario($idUsuario, $nombre, $correo, $password);
    editarUsuario($usuario);
    header("Location: ../../vista/editar.php");
  }
  else {
  header("Location:../../vista/index.php");
}
