<?php 
session_start();
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $id = $_POST['id'];
    $primernombre = $_POST['primernombre'];
    $segundonombre = $_POST['segundonombre'];
    $primerapellido = $_POST['primerapellido'];
    $segundoapellido = $_POST['segundoapellido'];
    $direccion = $_POST['direccion'];
    $lugardenacimiento = $_POST['lugardenacimiento'];
    $ocupacion = $_POST['procedencia'];
    $procedencia = $_POST['ocupacion'];
    $ci = $_POST['ci'];
    $estadocivil = $_POST['estadocivil'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $hereditariosyfamiliares = $_POST['hereditariosyfamiliares'];
    $personalespatologicos = $_POST['personalespatologicos'];
    $personalesnopatologicos = $_POST["personalesnopatologicos"];
    // Crear la conexión a la base de datos
    $con = new mysqli("localhost", "root", "", "consultoriofisioterapia");
// Verificar si hay errores en la conexión
    if ($con->connect_errno) {
        echo "Error en la conexión a la base de datos: " . $con->connect_error;
        exit();
    }


$sql = "INSERT INTO historial(primernombre,segundonombre, primerapellido, segundoapellido, direccion, lugardenacimiento, procedencia, ocupacion, ci, estadocivil, edad, sexo, hereditariosyfamiliares, personalespatologicos, personalesnopatologicos) 
VALUES ('$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', '$direccion', '$lugardenacimiento', '$procedencia', '$ocupacion', '$ci', '$estadocivil', '$edad', '$sexo', '$hereditariosyfamiliares', '$personalespatologicos', '$personalesnopatologicos')";


    if ($con->query($sql) === TRUE) {
        echo "Paciente agregado exitosamente.";
        echo "<script>
                setTimeout(function() {
                    window.location.href = '../../secciones/pacientes/index.php';
                }, 0000); // Redireccionar después de 3 segundos (3000 ms)
              </script>";
    } else {
        echo "Error al agregar el paciente: " . $con->error;
    }

    $con->close();
    exit();
}
?>

<!-- implementacion de conexion fin -->

<?php include ("../../templates/header.php"); ?>

<br/>

<br/>
<h3>Datos personales</h3>
<form class="row g-3" action="" method="post" enctype="multipart/form/data">
  <div class="col-md-6">
    <label for="primernombre " class="form-label">Primer Nombre</label>
    <input type="text" class="form-control" name= "primernombre" id="primernombre " placeholder="Primer nombre" >
  </div>
  <div class="col-md-6">
    <label for="segundonombre" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control" name= "segundonombre" id="segundonombre" placeholder="Segundo nombre">
  </div>
  <div class="col-md-6">
    <label for="primerapellido" class="form-label">Primer apellido</label>
    <input type="text" class="form-control" name= "primerapellido" id="primerapellido" placeholder="Primer apellido">
  </div>
  <div class="col-md-6">
    <label for="segundoapellido" class="form-label">Segundo apellido</label>
    <input type="text" class="form-control" name= "segundoapellido" id="segundoapellido" placeholder="Segundo apellido">
  </div>

<div class="col-md-6">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control"  name= "direccion" id="direccion" placeholder="Dirección">
  </div>


  <div class="col-md-3">
    <label for="lugardenacimiento" class="form-label">Lugar de nacimiento</label>
    <input type="text" class="form-control" name= "lugardenacimiento" id="lugardenacimiento" placeholder="Lugar de nacimiento">
  </div>
  <div class="col-md-3">
    <label for="procedencia" class="form-label">Procedencia</label>
    <input type="text" class="form-control" name= "procedencia" id="procedencia" placeholder="Procedencia">
  </div>
  <div class="col-md-4">
    <label for="ocupacion" class="form-label">Ocupación</label>
    <input type="text" name= "ocupacion" class="form-control" id="ocupacion" placeholder="Ocupación">
  </div>
  <div class="col-md-2">
    <label for="ci" class="form-label">CI</label>
    <input type="text" class="form-control" name= "ci" id="ci" placeholder="CI">
  </div>
  <div class="col-md-2">
    <label for="estadocivil" class="form-label">Estado civil</label>
    <input type="text" class="form-control" name= "estadocivil" id="estadocivil" placeholder="Estado Civil">
  </div>
  <div class="col-md-2">
    <label for="edad" class="form-label">Edad</label>
    <input type="text" class="form-control" name= "edad" id="edad" placeholder="Edad">
  </div>
  <div class="col-md-2">
    <label for="sexo" class="form-label">Sexo</label>
    <input type="text" class="form-control" name= "sexo" id="sexo" placeholder="Sexo">
  </div>

  <h3>Antecedentes</h3>

  <div class="col-12">
    <label for="hereditariosyfamiliares" class="form-label">Hereditarios y familiares</label>
    <input type="text" class="form-control" name= "hereditariosyfamiliares" id="hereditariosyfamiliares" placeholder="Diabetes">
  </div>
  <div class="col-12">
    <label for="personalespatologicos" class="form-label">Personales patológicos</label>
    <input type="text" class="form-control" name= "personalespatologicos" id="personalespatologicos" placeholder="Alergias">
  </div>
  <div class="col-12">
    <label for="personalesnopatologicos" class="form-label">Personales no patológicos</label>
    <input type="text" class="form-control" name= "personalesnopatologicos" id="personalesnopatologicos" placeholder="Alergias">
    </div>

        <button type="submit" class="btn btn-success">Agregar Historial</button>
        <a name="" id="" class="btn btn-primary" href="../../secciones/pacientes/index.php" role="button">Cancelar</a>

    </form>

    <!-- </div>
    <div class="card-footer text-muted"></div>
</div> -->

<?php include ("../../templates/footer.php"); ?>