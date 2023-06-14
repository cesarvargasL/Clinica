<!-- implementacion de conexion inicio -->
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
    //$foto = $_POST['foto'];
    $horadeconsulta = $_POST['horaconsulta'];
    $fechaConsulta = $_POST["fecha_consulta"];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];
    // $motivoConsulta = $_POST["horaconsulta"];

    // Crear la conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "consultoriofisioterapia");
// Verificar si hay errores en la conexión
    if ($conn->connect_errno) {
        echo "Error en la conexión a la base de datos: " . $conn->connect_error;
        exit();
    }

    $sql = "INSERT INTO pacientes (primernombre, segundonombre, primerapellido, segundoapellido, direccion, lugardenacimiento, ocupacion, ci, estadocivil, edad, sexo, horaconsulta, fecha_consulta, fecha_nacimiento, telefono) VALUES ('$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', '$direccion', '$lugardenacimiento', '$ocupacion', ' $ci', '$estadocivil', '$edad', '$sexo', '$horadeconsulta', '$fechaConsulta', '$fechaNacimiento', '$telefono')";


    if ($conn->query($sql) === TRUE) {
        echo "Paciente agregado exitosamente.";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'index.php';
                }, 3000); // Redireccionar después de 3 segundos (3000 ms)
              </script>";
    } else {
        echo "Error al agregar el paciente: " . $conn->error;
    }

    $conn->close();
    exit();
}
?>

<!-- implementacion de conexion fin -->

<?php include ("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        Datos del paciente
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form/data">
           
        <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input type="text"
            class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="Primer nombre">
        </div>

        <div class="mb-3">
          <label for="segundonombre" class="form-label">Segundo nombre</label>
          <input type="text"
            class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="Segundo nombre">
        </div>

        <div class="mb-3">
          <label for="primerapellido" class="form-label">Primer apellido</label>
          <input type="text"
            class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="Primer apellido">
        </div>

        <div class="mb-3">
          <label for="segundoapellido" class="form-label">Segundo apellido</label>
          <input type="text"
            class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="Segundo Apellido">
        </div>

        <div class="mb-3">
          <label for="ci" class="form-label">CI</label>
          <input type="text"
            class="form-control" name="segundoapellido" id="ci" aria-describedby="helpId" placeholder="12345678">
        </div>

        <div class="mb-3">
          <label for="horaconsulta" class="form-label">Hora de consulta</label>
          <input type="time" class="form-control" name="horadeconsulta" id="horadeconsulta" aria-describedby="emailHelpId" placeholder="Hora de consulta">
        </div>

        <div class="mb-3">
          <label for="fechadeconsulta" class="form-label">Fecha de consulta</label>
          <input type="date" class="form-control" name="fechadeconsulta" id="fechadeconsulta" aria-describedby="emailHelpId" placeholder="Hora de consulta">
        </div>

        <button type="submit" class="btn btn-success">Agregar Paciente</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include ("../../templates/footer.php"); ?>