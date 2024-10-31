<link rel="stylesheet" href="estilos.css">
<?php
// Incluimos el archivo de conexión para establecer la conexión con la base de datos
include 'conexion.php';

// Recuperamos los datos enviados desde el formulario mediante el método POST
$cedula = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$genero = $_POST['genero'];

echo "Cédula: " . $cedula . "<br>";
echo "Nombres: " . $nombres . "<br>";
echo "Apellidos: " . $apellidos . "<br>";
echo "Género: " . $genero . "<br>";
echo "<br>";


// Creamos la consulta SQL para insertar un nuevo registro en la tabla 'personas'
// Usamos los valores obtenidos de las variables $cedula, $nombres, $apellidos y $genero
$sql = "INSERT INTO personas (cedula, nombres, apellidos, genero) VALUES ('$cedula', '$nombres', '$apellidos', '$genero')";

// Ejecutamos la consulta SQL y verificamos si se realizó correctamente
if ($conexion->query($sql) === TRUE) {
    // Si la consulta es exitosa, mostramos un mensaje de confirmación
    echo "Registro añadido exitosamente";
} else {
    // Si ocurre un error, mostramos el mensaje de error
    echo "Error: " . $conexion->error;
}

// Cerramos la conexión a la base de datos para liberar recursos
$conexion->close();
?>


    <!-- Botón para regresar a index.php -->
<div class="button">
    <button onclick="window.location.href='index.html'">Volver al Inicio</button>
</div>