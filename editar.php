<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basedoctor";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $fecha = $_POST["fecha"];
    $mensaje = $_POST["mensaje"];

    $sql = "UPDATE datos SET nombre='$nombre', telefono='$telefono', email='$email', fecha ='$fecha', mensaje='$mensaje' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location:mostrar.php");
        echo '<script>alert("Registro actualizado exitosamente.");</script>';
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM datos WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nombre = $row["nombre"];
    $telefono = $row["telefono"];
    $email = $row["email"];
    $fecha = $row["fecha"];
    $mensaje = $row["mensaje"];
} else {
    echo "No se encontró el registro.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="stylesesion.css">
</head>
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
<body id="back">
    <table border="1">
        <form method="POST" action="">
        <tr>
            <td colspan="2" style="background-color: #b4b4b4; padding-bottom: 5px; padding-top: 5px; text-align: center; "><label style="font-size: 30px;">Editar registro</label></td>
        </tr>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <tr>
                <td>Nombre y apellidos:</td>
                <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="text" name="telefono" value="<?php echo $telefono; ?>"></td>
            </tr>
            <tr>
                <td>Correo electronico:</td>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td>Fecha:</td>
                <td><input type="date" name="fecha" value="<?php echo $fecha; ?>"></td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td><input type="text" name="mensaje" value="<?php echo $mensaje; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Guardar"></td>
            </tr>
        </form>
    </table>
</body>
</html>
</html>
