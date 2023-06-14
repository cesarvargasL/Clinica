<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];



$sql = "INSERT INTO doctores (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso del doctor.";
    header("Location: login.php"); // Redireccionar al index
} else {
    echo "Error en el registro del doctor: " . $conn->error;
}

$conn->close();
?>