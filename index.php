<?php
require('conexion.php');
$sqlQuery = "SELECT * FROM personas";
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
    <title>Directorio de personas</title>
</head>

<body>
    <header>

        <nav>
            <div class="nav-wrapper teal lighten-1">
                <a href="#" class="brand-logo"><img src="files/BICTIA-horizontal.png" style="height: 64px;" alt="Logo Bictia"></a>
                <nav class="teal lighten-1">
                    <div id="nav-mobile" class="right hide-on-med-and-down nav-wrapper teal lighten-1" style="margin-right: 10px;">
                        <form method="POST" action="buscar.php">
                            <div class="input-field">
                                <input id="search" type="search" name="buscador" required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </nav>
    </header>
    <div class="contenedor">
        <form method="POST" action="crud.php" class="col s12 formulario">
            <div class="row campo">
                <div class="input-field col s12 campo">
                    <i class="material-icons prefix">priority_high</i>
                    <input id="identificacion" type="text" name="identificacion" class="validate" required>
                    <label for="identificacion">Identificación</label>
                </div>
            </div>
            <div class="row campo">
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nombre" type="text" name="nombre" class="validate" required>
                    <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s6">
                    <input id="fapellido" type="text" name="apellido" class="validate" required>
                    <label for="apellido">Apellido</label>
                </div>
            </div>
            <div class="row campo">
                <div class="input-field col s12">
                    <i class="material-icons prefix">location_on</i>
                    <input id="direccion" type="text" name="direccion" class="validate" required>
                    <label for="direccion">Dirección</label>
                </div>
            </div>
            <div class="row campo">
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="celular" type="tel" name="celular" class="validate" required>
                    <label for="celular">Celular</label>
                </div>
                <div class="input-field col s6">

                    <input id="telefono" type="tel" name="telefono" class="validate" required>
                    <label for="telefono">Telefono</label>
                </div>
            </div>
            <div class="row campo">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="correo" type="email" name="correo" class="validate" required>
                    <label for="correo">Correo</label>
                </div>
            </div>
            <div class="botones">
                <button class="btn green waves-effect waves-light btn-small" type="submit" name="action" value="ingresar">Ingresar
                    <i class="material-icons right">add</i>
                </button>
                
            </div>

        </form>
    </div>
    <div class="contenedor">
        <!-- identificacion,nombre, apellido, direccion,celuar, telefono, email -->
        <table class="striped responsive-table tabla">
            <thead>
                <tr>
                    <th>Identficación</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Celular</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultado as $persona) : ?>
                    <tr>
                        <td name="tidentificacion"><?php echo $persona['identificacion']; ?></td>
                        <td name="tnombre"><?php echo $persona['nombre']; ?></td>
                        <td name="tapellido"><?php echo $persona['apellido']; ?></td>
                        <td name="tdireccion"><?php echo $persona['direccion']; ?></td>
                        <td name="tcelular"><?php echo $persona['celular']; ?></td>
                        <td name="ttelefono"><?php echo $persona['telefono']; ?></td>
                        <td name="tcorreo"><?php echo $persona['correo']; ?></td>
                        <td>    
                            <a href="editar.php?identificacion=<?php echo $persona['identificacion'];?>"><button class="btn amber waves-effect waves-light btn-small" type="submit" name="action" value="editar"><i style="margin: 0;padding: 0;" class="material-icons right">edit</i></button></a>
                           <form action="crud.php" method="post"> <input type="text" name="identificacion" value="<?php echo $persona['identificacion']; ?>" style="display:none"> <button class="btn red accent-4 waves-effect waves-light btn-small" type="submit" name="action" value="eliminar"> <i style="margin: 0;padding: 0;" class="material-icons right">delete</i></button></form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    






    


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>