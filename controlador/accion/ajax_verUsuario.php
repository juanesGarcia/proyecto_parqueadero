<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $user = verUsuarioPorId($_SESSION['ID_USUARIO']);
    echo json_encode($user);