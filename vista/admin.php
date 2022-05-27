<?php
   session_start();
   if(!isset(($_SESSION['CORREO_USUARIO']))){
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuario</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="background-color: #e3f2fd;">
                <a class="navbar-brand">Administrador </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Lista conductores</a>
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">listado conductores </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div>
                                            <table class="table">
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Celular</th>
                                                    <th>Placa</th>
                                                </tr>
                                                <tr>
                                                    <td>Alfreds Futterkiste</td>
                                                    <td>Maria Anders</td>
                                                    <td>Germany</td>
                                                </tr>
                                                <tr>
                                                    <td>Centro comercial Moctezuma</td>
                                                    <td>Francisco Chang</td>
                                                    <td>Mexico</td>
                                                </tr>
                                                <tr>
                                                    <td>Ernst Handel</td>
                                                    <td>Roland Mendel</td>
                                                    <td>Austria</td>
                                                </tr>
                                                <tr>
                                                    <td>Island Trading</td>
                                                    <td>Helen Bennett</td>
                                                    <td>UK</td>
                                                </tr>
                                                <tr>
                                                    <td>Laughing Bacchus Winecellars</td>
                                                    <td>Yoshi Tannamuri</td>
                                                    <td>Canada</td>
                                                </tr>

                                            </table>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn"
                                                style="background-color: #e3f2fd;">Reservar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop1">Generar código
                                QR</a>
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <div class="conimg">
                                                <h5 class="modal-title1" id="staticBackdropLabel1">Código QR</h5>
                                                <h5> <?php  echo   $_SESSION['NOMBRE_USUARIO']?></h5>
                                                <img class="imagen" src="image/juanestebancubillos_qr.png">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
        <iframe id="map"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1794.3443817172933!2d-74.18640631459462!3d11.225133850956585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1652395451767!5m2!1ses!2sco"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>