<?php
include("conexion.php");
include('registrar_handler.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form action="registrar.php" method="POST">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="digite el usuario">
                        <?php if (in_array('<div class="alert alert-danger" role="alert">El nombre debe contener más de cuatro caracteres</div>', $error_Array)) 
                        echo '<div class="alert alert-danger" role="alert">El nombre debe contener más de cuatro caracteres</div>';
                        else if (in_array('<div class="alert alert-danger" role="alert"> El usuario ya existe</div>', $error_Array))
                            echo '<div class="alert alert-danger" role="alert"> El usuario ya existe</div>';
                        ?>
                    </div><br>

                    <div class="form-group">
                        <label for="correo">Correo </label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="usuario@ejemplo.com">
                    </div> <br>

                    <div class="form-group">
                        <label for="correo2">Confirmar correo</label>
                        <input type="email" class="form-control" name="correo2" id="correo2" placeholder="usuario@ejemplo.com">

                        <?php if (in_array('<div class="alert alert-danger" role="alert">Los correos no coinciden</div>', $error_Array)) 
                        echo '<div class="alert alert-danger" role="alert">Los correos no Coinciden</div>';
                        else if (in_array('<div class="alert alert-danger" role="alert">El correo ya existe!</div>', $error_Array))
                            echo '<div class="alert alert-danger" role="alert">El correo ya Existe!</div>';
                        else if (in_array('<div class="alert alert-danger" role="alert">El formato no es válido!</div>', $error_Array))
                        echo '<div class="alert alert-danger" role="alert">El formato no es válido!</div>';

                        ?>

                    </div> <br>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="contraseña">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password2">Password</label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="contraseña">
                    </div>

                    <br>
                    <button class="btn btn-primary" type="submit" name="registrar"> Registrar</button>
                </form>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>