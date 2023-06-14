<?php 
session_start();

if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $primernombre = $_POST['primernombre'];
    $segundonombre = $_POST['segundonombre'];
    $primerapellido = $_POST['primerapellido'];
    $segundoapellido = $_POST['segundoapellido'];
    // $direccion = $_POST['direccion'];
    // $lugardenacimiento = $_POST['lugardenacimiento'];
    // $ocupacion = $_POST['ocupacion'];
    $ci = $_POST['ci'];
    // $estadocivil = $_POST['estadocivil'];
    // $edad = $_POST['edad'];
    // $sexo = $_POST['sexo'];
    //$foto = $_POST['foto'];
    $horaconsulta = $_POST['horaconsulta'];
    $fecha_consulta = $_POST["fecha_consulta"];
    // $fechaNacimiento = $_POST['fecha_nacimiento'];
    // $telefono = $_POST['telefono'];
    // $motivoConsulta = $_POST["horaconsulta"];

    $sql = "UPDATE pacientes SET primernombre='$primernombre', segundonombre='$segundonombre', primerapellido='$primerapellido', segundoapellido='$segundoapellido', ci='$ci', horaconsulta='$horaconsulta', fecha_consulta='$fecha_consulta' WHERE id='$id'";
    echo $sql;

     if ($con->query($sql) === TRUE) {
         echo "Paciente actualizado exitosamente.";
         echo "<script>
                 setTimeout(function() {
                     window.location.href = 'index.php';
                 }, 0000); // Redireccionar después de 3 segundos (3000 ms)
               </script>";
     } else {
         echo "Error al agregar el paciente: " . $con->error;
     }

    $con->close();
    exit();
}
?>