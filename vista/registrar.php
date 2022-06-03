<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio de sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styleregis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function mover() {
            window.location.href = 'index.php';
        }
    </script>
</head>

<body>
    <div class="total">
        <div class="container">
            <div class="iniciarsesion">
                <h2 class="letras" onclick="mover()">Registrar Sesión</h2>
                <form action="../controlador/accion/act_registrarUsuario.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nom">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Digite su nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="correo">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            name="contrasena1">
                    </div>
                    <div class="form-group">
                        <label for="pwd1">Verificar Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Verificar password"
                            name="contrasena2">
                    </div>
                
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-success" name="register">Submit</button>
                </form>
                <br></br>
            </div>
        

        </div>

    </div>

</body>

</html>