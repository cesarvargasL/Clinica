<?php 
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $id = $_POST['id'];
    $id = $_POST['id'];
    $motivo = $_POST['motivo'];
    $tratamiento = $_POST['tratamiento'];
    $duracion = $_POST['duracion'];
    $medicamentos = $_POST['medicamentos'];
    $radiografias = $_POST['radiografias'];// Crear la conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "consultoriofisioterapia");
// Verificar si hay errores en la conexión
    if ($conn->connect_errno) {
        echo "Error en la conexión a la base de datos: " . $conn->connect_error;
        exit();
    }


$sql = "INSERT INTO consultas(id, motivo, tratamiento, duracion, medicamentos, radiografias) VALUES ('$id', '$motivo', '$tratamiento', '$duracion', '$medicamentos', '$radiografias')";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente agregado exitosamente.";
        echo "<script>
                setTimeout(function() {
                    window.location.href = '../../secciones/pacientes/index.php';
                }, 0000); // Redireccionar después de 3 segundos (3000 ms)
              </script>";
    } else {
        echo "Error al agregar el paciente: " . $conn->error;
    }

    $conn->close();
    exit();
}
?>


