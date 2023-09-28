<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "basedoctor"; // Nombre de la base de datos

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Función para generar los botones de editar y eliminar
function generateButtons($id) {
    return "<td><a href='editar.php?id=$id'>Editar</a></td><td><a href='eliminar.php?id=$id'>Eliminar</a></td>";
}

$sql = "SELECT id,nombre,telefono,email,fecha,mensaje FROM datos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link rel="stylesheet" href="stylesesion.css">
</head>
<body id="back">
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Barbería</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <table border="1">
        <tr>
            <td colspan="8" style="background-color: #b4b4b4; padding-bottom: 5px; padding-top: 5px; text-align: center;"><label>Citas</label></td>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nombre y apellidos</th>
            <th>Telefono</th>
            <th>Correo electronico</th>
            <th>Fecha</th>
            <th>Mensaje</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["telefono"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["fecha"] . "</td>";
                echo "<td>" . $row["mensaje"] . "</td>";
                echo generateButtons($row["id"]);
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No se encontraron registros.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
