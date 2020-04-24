<?php
require('conexion.php');
// identificacion,nombre, apellido, direccion,celuar, telefono, email

$boton = $_POST['action'];

//echo $identificacion.$nombre.$apellido.$direccion.$celular.$telefono.$correo.$boton;

switch ($boton) {
    case 'ingresar':
        $identificacion = $_POST['identificacion'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $celular = $_POST['celular'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $sqlAdd = "INSERT INTO personas (identificacion,nombre,apellido,direccion,celular,telefono,correo) values (?,?,?,?,?,?,?)";
        $stm = $conexion->prepare($sqlAdd);
        $stm->bind_param('issssss', $identificacion, $nombre, $apellido, $direccion, $celular, $telefono, $correo);
        $stm->execute();
        header('Location: index.php');
        break;
    case 'editar':
        $identificacion = $_POST['identificacion'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $celular = $_POST['celular'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $sqlEdit = "UPDATE personas set nombre = '$nombre', apellido='$apellido',direccion='$direccion', celular='$celular', telefono='$telefono', correo='$correo' WHERE identificacion = '$identificacion'";
        mysqli_query($conexion, $sqlEdit);
        header('Location: index.php');
        break;
    case 'eliminar':
        $identificacion = $_POST['identificacion'];
        $sqlDelete = "DELETE FROM personas WHERE identificacion = '$identificacion'";
        mysqli_query($conexion,$sqlDelete);
        header('location: index.php');
        break;
}
