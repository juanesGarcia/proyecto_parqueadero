<?php
session_start();
if (!isset(($_SESSION['ID_USUARIO']))) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylead.css" media="screen" />
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"     integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="     crossorigin="" />

    <title>Usuario</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="background-color: #e3f2fd;">
                <a class="navbar-brand">Administrador </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Reservar o liberar espacio</a>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Reserva</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select id="mostrar">

                                                <option disabled selected="">Seleccione un paquedero</option>
                                                <option value="Parqueaderohemiciclo">Parqueadero Hemiciclo</option>
                                                <option value="Parqueaderodestapada">Parqueadero Destapada</option>
                                                <option value="ParqueaderoBicis">Parqueadero Bicicletas</option>
                                                <option value="ParqueaderoDocentes">Parqueadero Docentes</option>
                                                <option value="Parqueaderopibe">Parqueadero Pibe</option>
                                                <option value="ParqueaderoBloque3">Parqueadero Bloque 3</option>

                                            </select>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="mostrar()">Reservar</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="librar()">liberar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Lista conductores</a>
                            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop2Label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdrop2Label">listado conductores </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div>
                                            <table class="table">
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Correo</th>
                                                    <th>contraseña</th>
                                                </tr>
                                                <tr>
                                                    <td>root</td>
                                                    <td>admin@gmail.com</td>
                                                    <td>admin</td>
                                                </tr>
                                                <tr>
                                                    <td>juan</td>
                                                    <td>juanesgym2018@gmail.com</td>
                                                    <td>123</td>
                                                </tr>
                                                <tr>
                                                    <td>nicolas c</td>
                                                    <td>nicolas@gmail.com</td>
                                                    <td>123</td>
                                                </tr>
                                                <tr>
                                                    <td>cristian</td>
                                                    <td>cristian@gmail.com</td>
                                                    <td>cri</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Generar código
                                QR</a>
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <div class="conimg">
                                                <h5 class="modal-title1" id="staticBackdropLabel1">Código QR</h5>
                                                <img class="imagen" src="image/qrcode_www.unimagdalena.edu.co.png">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="imgPerfil" src="/Imagenes/usuario-de-perfil.png" alt="">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Editar conductor</a></li>
                                <li><a class="dropdown-item" href="#">Verificar espacio</a></li>
                                <li><a class="dropdown-item" href="#">Liberar espacio</a></li>
                                <li><a class="dropdown-item" href="../controlador/accion/act_logout.php">Cerrar
                                        sesión</a></li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="map">


        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>



    <script src="js/Mapa.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>