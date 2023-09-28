<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "basedoctor";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("No hay conexión: " . mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

// Utiliza sentencias preparadas para evitar SQL injection
$query = mysqli_prepare($conn, "SELECT * FROM login WHERE usuario = ? AND password = ?");
mysqli_stmt_bind_param($query, "ss", $nombre, $pass);
mysqli_stmt_execute($query);

// Obtiene el resultado de la consulta
$result = mysqli_stmt_get_result($query);

if (mysqli_num_rows($result) == 1) {
    // Usuario autenticado correctamente
    header("Location:mostrar.php");
    //echo "Bienvenido: " . $nombre;
} else {
    // Usuario no encontrado o autenticación fallida
    echo '<script>alert("No ingreso, usuario no existe");</script>';
}

// Cierra la conexión y la consulta preparada
mysqli_stmt_close($query);
mysqli_close($conn);
?>