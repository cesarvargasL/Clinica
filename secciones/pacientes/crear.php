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
    $ci = $_POST['ci'];
    $horaconsulta = $_POST['horaconsulta'];
    $fecha_consulta = $_POST["fecha_consulta"];

    // Crear la conexión a la base de datos
    $conn = new mysqli("localhost", "root", "", "consultoriofisioterapia");
// Verificar si hay errores en la conexión
    if ($conn->connect_errno) {
        echo "Error en la conexión a la base de datos: " . $conn->connect_error;
        exit();
    }

    $sql = "INSERT INTO pacientes (primernombre, segundonombre, primerapellido, segundoapellido, ci, horaconsulta, fecha_consulta) 
    VALUES ('$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', ' $ci', '$horaconsulta', '$fecha_consulta')";


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
            class="form-control" name="ci" id="ci" aria-describedby="helpId" placeholder="12345678">
        </div>

        <div class="mb-3">
          <label for="horaconsulta" class="form-label">Hora de consulta</label>
          <input type="time" class="form-control" name="horaconsulta" id="horaconsulta" aria-describedby="emailHelpId" placeholder="Hora de consulta">
        </div>

        <div class="mb-3">
          <label for="fecha_consulta" class="form-label">Fecha de consulta</label>
          <input type="date" class="form-control" name="fecha_consulta" id="fecha_consulta" aria-describedby="emailHelpId" placeholder="Fecha de consulta">
        </div>

        <button type="submit" class="btn btn-success">Agregar Paciente</button>
        <a name="" id="" class="btn btn-primary" href="../../secciones/pacientes/index.php" role="button">Cancelar</a>

    </form>

    <!-- </div>
    <div class="card-footer text-muted"></div>
</div> -->

<?php include ("../../templates/footer.php"); ?>