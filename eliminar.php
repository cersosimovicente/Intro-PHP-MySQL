<?php
include 'conexion.php';
$cedula = $_POST['cedula'];

$sql = "DELETE FROM personas WHERE cedula='$cedula'";

if ($conexion->query($sql) === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error: " . $conexion->error;
}
?>
