<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basedoctor";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = $_GET["id"];

$sql = "DELETE FROM datos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location:mostrar.php");
    echo '<script>alert("Registro eliminado exitosamente.");</script>';
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();
?>
