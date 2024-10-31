<?php
// conexion.php
$conexion = new mysqli("localhost", "root", "", "cerso");
if ($conexion->connect_error) {
    die("Error al conectar a MySQL: " . $conexion->connect_error);
}
?>
