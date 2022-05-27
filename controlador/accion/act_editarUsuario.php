<?php

session_start();

require_once(__DIR__ . '/../mdb/mdbUsuario.php');
$idUsuario = $_SESSION['ID_USUARIO'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['contrasena'];
$nom_img = $_FILES['imagenes']['tmp_name'];
$archivo = $_FILES['imagenes']['name'];
$ruta = "../../image";
$ruta_p = "../image";
$mos = $ruta . "/" . $archivo;
$mos_f = $ruta_p . "/" . $archivo;
move_uploaded_file($nom_img,$mos);



if ($nombre != "" and $correo != "" and $password != "" and $archivo!="") {
  $usuario = new Usuario($idUsuario, $nombre, $correo, $password,$mos_f);
  editarUsuario($usuario);
  header("Location: ../../vista/index.php");
} else {
  header("Location:../../vista/falla.php");
}
