<?php include ("../../templates/header.php"); ?>

<br/>

<div class="card">
    <div class="card-header">
        Datos del paciente
    </div>
    <div class="card-body">

        <form action="" method="post" enctype="multipart/form/data">
           
        <div class="mb-3">
        <label for="" class="primernombre">Primer nombre</label>
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
          <label for="" class="form-label">Foto:</label>
          <input type="file"
            class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
          <label for="horadeconsulta" class="form-label">Hora de consulta</label>
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