<?php
include ("../../templates/header.php"); 

$id = $_GET['id'];
include('conexion.php');

$sql = "SELECT * FROM pacientes WHERE id = '$id'";
$resultado = $con->query($sql);

$row = $resultado->fetch_assoc();
?>

<br/>

<div class="card">
    <div class="card-header">
        Datos del paciente
    </div>
    <div class="card-body">

        <form action="update.php" method="post" enctype="multipart/form-data">

        <div>
        <input type="hidden"
         name="id" id="id" aria-describedby="helpId" value="<?php echo $id?>">
        </div>
           
        <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input type="text"
            class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" value="<?php echo $row['primernombre']; ?>">
        </div>

        <div class="mb-3">
          <label for="segundonombre" class="form-label">Segundo nombre</label>
          <input type="text"
            class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" value="<?php echo $row['segundonombre']; ?>">
        </div>

        <div class="mb-3">
          <label for="primerapellido" class="form-label">Primer apellido</label>
          <input type="text"
            class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" value="<?php echo $row['primerapellido']; ?>">
        </div>

        <div class="mb-3">
          <label for="segundoapellido" class="form-label">Segundo apellido</label>
          <input type="text"
            class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" value="<?php echo $row['segundoapellido']; ?>">
        </div>

        <div class="mb-3">
          <label for="ci" class="form-label">CI</label>
          <input type="text"
            class="form-control" name="ci" id="ci" aria-describedby="helpId" value="<?php echo $row['ci']; ?>">
        </div>

        <div class="mb-3">
          <label for="horaconsulta" class="form-label">Hora de consulta</label>
          <input type="time" class="form-control" name="horaconsulta" id="horaconsulta" aria-describedby="emailHelpId" value="<?php echo $row['horaconsulta']; ?>">
        </div>

        <div class="mb-3">
          <label for="fecha_consulta" class="form-label">Fecha de consulta</label>
          <input type="date" class="form-control" name="fecha_consulta" id="fecha_consulta" aria-describedby="emailHelpId" value="<?php echo $row['fecha_consulta']; ?>">
        </div>

        <button type="submit" class="btn btn-success">Actualizar Paciente</button>
        <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

    </form>

    </div>
    <div class="card-footer text-muted"></div>
</div>

<?php include ("../../templates/footer.php"); ?>