<?php 
session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $correo = $_POST['correo'];

    $sql = "UPDATE doctores SET nombre='$nombre', contrasena='$contrasena', correo='$correo' WHERE id='$id'";
    echo $sql;

     if ($conn->query($sql) === TRUE) {
         echo "Paciente actualizado exitosamente.";
         echo "<script>
                 setTimeout(function() {
                     window.location.href = 'index.php';
                 }, 0000); // Redireccionar después de 3 segundos (3000 ms)
               </script>";
     } else {
         echo "Error al agregar el paciente: " . $conn->error;
     }

    $conn->close();
    exit();
}
?>