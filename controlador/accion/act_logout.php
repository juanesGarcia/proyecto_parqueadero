<?php
//Se reanuda la sesión existente
session_start();
//!cierra para que quede barrada la info de ese usuario
unset($_SESSION['EMAIL_USUARIO']);
//Luego se destruye esa sesion
session_destroy();
//Y se envía a la vista del login
header("Location: ../../vista/index.php");
