<?php
session_start();
include 'conexion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM doctores WHERE correo='$correo' AND contrasena='$contrasena'";

$resultado = $conn->query($sql);

if ($resultado->num_rows === 1) {
    $_SESSION['correo'] = $correo;
    header("Location: secciones/sistema/index.php");
} else {
    echo "Correo electrónico o contraseña incorrectos.";
}

$conn->close();
?>
