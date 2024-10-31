<?php
include 'conexion.php';
$sql = "SELECT cedula, nombres, apellidos, genero FROM personas";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        echo $fila['cedula'] . " - " . $fila['nombres'] . " - " . $fila['apellidos'] . " - " . $fila['genero'] . "<br>";
    }
} else {
    echo "No hay registros";
}
?>
<html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
    <style>
        /* Estilos generales */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
        }
        .list-container {
            text-align: center;
            background-color: #fff;
            padding: 20px 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #2196F3;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #1e87d4;
        }
    </style>
</head>
<body>
<div class="list-container">
    <h1>Lista de Personas</h1>
    
    <table>
        <tr>
            <th>Cédula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Género</th>
        </tr>
        
        <?php
        // Verificamos si hay registros y los mostramos en filas de la tabla
        if ($result->num_rows > 0) {
            while ($fila = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['cedula'] . "</td>";
                echo "<td>" . $fila['nombres'] . "</td>";
                echo "<td>" . $fila['apellidos'] . "</td>";
                echo "<td>" . $fila['genero'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay registros</td></tr>";
        }
        ?>
    </table>

    <!-- Botón para regresar a index.php -->
    <button onclick="window.location.href='index.html'">Volver al Inicio</button>
</div>

</html>