<?php
include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['date']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $date = trim($_POST['date']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos(nombre,telefono,email,fecha,mensaje)
        VALUES ('$name','$phone','$email','$date','$message')";
        $resultado = mysqli_query($conex, $consulta);
    }
}
?>