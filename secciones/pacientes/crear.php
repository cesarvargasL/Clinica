<?php 
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $primernombre = $_POST['primernombre'];
    $segundonombre = $_POST['segundonombre'];
    $primerapellido = $_POST['primerapellido'];
    $segundoapellido = $_POST['segundoapellido'];
    $direccion = $_POST['direccion'];
    $lugardenacimiento = $_POST['lugardenacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $ci = $_POST['ci'];
    $estadocivil = $_POST['estadocivil'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $foto = $_POST['foto'];
    $horadeconsulta = $_POST['horadeconsulta'];
    $fechaConsulta = $_POST["fecha_consulta"];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    $motivoConsulta = $_POST["motivo_consulta"];


    $sql = "INSERT INTO pacientes (primernombre, segundonombre, primerapellido, segundoapellido, direccion, lugardenacimiento, ocupacion, ci, estadocivil, edad, sexo, foto, horadeconsulta, fecha_consulta, fecha_nacimiento, telefono, motivo_consulta) VALUES ('$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', '$direccion', '$lugardenacimiento', '$ocupacion', ' $ci', '$estadocivil', '$edad', '$sexo', '$foto', '$horadeconsulta', '$fechaConsulta', '$fechaNacimiento', '$telefono', '$motivoConsulta')";

    
}
?>

<html>
<head>
    <title>Consultorio de Fisioterapia - Agregar Paciente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Agregar Paciente</h1>

    <form action="crear.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="primernombre" required><br>

        <label>Segundo nombre:</label>
        <input type="text" name="segundonombre" required><br>

        <label>Primer appellido:</label>
        <input type="text" name="primerapellido" required><br>

        <label>segundoapellido:</label>
        <input type="text" name="segundoapellido" required><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" required><br>

        <label>lugardenacimiento:</label>
        <input type="text" name="lugardenacimiento" required><br>

        <label>ocupacion:</label>
        <input type="text" name="ocupacion" required><br>

        <label>ci:</label>
        <input type="text" name="ci" required><br>

        <label>estadocivil:</label>
        <input type="text" name="estadocivil" required><br>

        <label>edad:</label>
        <input type="text" name="edad" required><br>

        <label>sexo:</label>
        <input type="text" name="sexo" required><br>

        <label>foto:</label>
        <input type="text" name="foto" required><br>

        <label>Hora de consulta:</label>
        <input type="time" name="horadeconsulta" required><br>

        <label>Fecha de Consulta:</label>
        <input type="date" name="fecha_consulta" required><br>

        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label>Motivo de Consulta:</label>
        <textarea name="motivo_consulta" required></textarea><br>
        
        <input type="submit" value="Agregar Paciente">
    </form>
</body>
</html>



