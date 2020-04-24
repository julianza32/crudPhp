<?php
require('conexion.php');
$id = $_GET['identificacion'];

$sqlQuery = "SELECT * FROM personas where identificacion = $id";
$resultado = mysqli_query($conexion, $sqlQuery);



$allResults = mysqli_fetch_assoc($resultado)
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Editar persona</title>
</head>

<body>
    <header>

        <nav>
            <div class="nav-wrapper teal lighten-1">
                <a href="#" class="brand-logo"><img src="files/BICTIA-horizontal.png" style="height: 64px;" alt="Logo Bictia"></a>
                <nav class="teal lighten-1">
                    <div id="nav-mobile" class="right hide-on-med-and-down nav-wrapper teal lighten-1" style="margin-right: 10px;">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <?php foreach ($resultado as $persona) : ?>
        <div class="contenedor">
            <form method="POST" action="crud.php" class="col s12 formulario">
                <div class="row campo">
                    <div class="input-field col s12 campo">
                        <i class="material-icons prefix">priority_high</i>
                        <input id="identificacion" type="text" name="identificacion" style="color: white;" value="<?php echo $persona['identificacion']; ?>" class="validate" required>
                        <label style="color: white;" for="identificacion">Identificación</label>
                    </div>
                </div>
                <div class="row campo">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nombre" type="text" name="nombre" value="<?php echo $persona['nombre']; ?>" class="validate" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="apellido" type="text" name="apellido" value="<?php echo $persona['apellido']; ?>" class="validate" required>
                        <label for="apellido">Apellido</label>
                    </div>
                </div>
                <div class="row campo">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">location_on</i>
                        <input id="direccion" type="text" name="direccion" value="<?php echo $persona['direccion']; ?>" class="validate" required>
                        <label for="direccion">Dirección</label>
                    </div>
                </div>
                <div class="row campo">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="celular" type="tel" name="celular" value="<?php echo $persona['celular']; ?>" class="validate" required>
                        <label for="celular">Celular</label>
                    </div>
                    <div class="input-field col s6">

                        <input id="telefono" type="tel" name="telefono" value="<?php echo $persona['telefono']; ?>" class="validate" required>
                        <label for="telefono">Telefono</label>
                    </div>
                </div>
                <div class="row campo">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="correo" type="email" name="correo" value="<?php echo $persona['correo']; ?>" class="validate" required>
                        <label for="correo">Correo</label>
                    </div>
                </div>
                <div class="botones">
                    <button class="btn amber waves-effect waves-light btn-small" type="submit" name="action" value="editar">Editar
                        <i class="material-icons right">edit</i>
                    </button>
                </div>

            </form>
        </div>
    <?php endforeach ?>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>