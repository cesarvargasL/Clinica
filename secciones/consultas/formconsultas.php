<?php include ("../../templates/header.php"); ?>
</br>
<h3>Nueva consulta</h3>
<form class="row g-3" action="crear.php" method="post" enctype="multipart/form-data">
<div class="col-12">
    <label for="id" class="form-label">Identificación</label>
    <input type="text" class="form-control" name="id" id="id" placeholder="Identificación del paciente" >
  </div>
<div class="col-12">
    <label for="motivo" class="form-label">Motivo</label>
    <input type="text" class="form-control" name="motivo" id="motivo" placeholder="Motivo" >
  </div>
  <div class="col-10">
    <label for="tratamiento" class="form-label">Tratamiento</label>
    <input type="text" class="form-control" name="tratamiento" id="tratamiento" placeholder="Tratamiento" >
  </div>
  <div class="col-md-2">
    <label for="duracion" class="form-label">Duración</label>
    <input type="text" class="form-control" name= "duracion" id="duracion" placeholder="Duración" >
  </div>

  <div class="col-8">
    <label for="medicamentos" class="form-label">Medicamentos recetados</label>
    <input type="text" class="form-control" name="medicamentos" id="medicamentos" placeholder="Medicamentos" >
  </div>
  <div class="col-md-4">
    <label for="radiografias" class="form-label">Radiografías</label>
    <input type="text" class="form-control" name="radiografias" id="radiografias" placeholder="Radiografías" >
  </div>
  
<button type="submit" class="btn btn-success">Agregar Consulta</button>

  </form>
</br>
<a name="" id="" class="btn btn-primary" href="../../secciones/pacientes/index.php" role="button">Cancelar</a>


  <?php include ("../../templates/footer.php"); ?>