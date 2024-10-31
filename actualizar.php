<?php
include 'conexion.php';
$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$genero = $_POST['genero'];

$sql = "UPDATE personas SET nombres='$nombres', apellidos='$apellidos', genero='$genero' WHERE cedula='$cedula'";

if ($conexion->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error: " . $conexion->error;
}
?>
    <!-- Botón para regresar a index.php -->
    <button onclick="window.location.href='index.html'">Volver al Inicio</button>