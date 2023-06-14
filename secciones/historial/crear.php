<?php include ("../../templates/header.php"); ?>

<br/>
<h3>Datos personales</h3>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Primer Nombre</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Segundo Nombre</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Primer apellido</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Segundo apellido</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>

<div class="col-md-6">
    <label for="inputCity" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputCity">
  </div>


  <div class="col-md-3">
    <label for="inputState" class="form-label">Lugar de nacimiento</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Procedencia</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Ocupación</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">CI</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Estado civil</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Edad</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Sexo</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <h3>Antecedentes</h3>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Hereditarios y familiares</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Personales patológicos</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Personales no patológicos</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-12">
    <a name="" id="" class="btn btn-primary" 
        href="../../secciones/consultas/crear.php" role="button">
        Agregar consulta
    </a>
</br>
</br>
</div>
  </div>

  </form>

<?php include ("../../templates/footer.php"); ?>