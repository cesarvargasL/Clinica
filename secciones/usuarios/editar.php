<?php
include ("../../templates/header.php"); 

$id = $_GET['id'];
include('conexion.php');

$sql = "SELECT * FROM doctores WHERE id = '$id'";
$resultado = $conn->query($sql);

$row = $resultado->fetch_assoc();
?>

<br/>

<div class="card">
    <div class="card-header">
        Datos del nombre
    </div>
    <div class="card-body">
    <form action="update.php" method="post" enctype="multipart/form-data">
           
            <div>
            <input type="hidden"
            name="id" id="id" aria-describedby="helpId" value="<?php echo $id?>">
            </div>

           <div class="mb-3">
           <label for="nombre" class="form-label">Nombre del nombre:</label>
           <input type="text"
               class="form-control" name="nombre" id="nombre" aria-describedby="helpId" value="<?php echo $row['nombre']; ?>">
           </div>
           
           <div class="mb-3">
             <label for="contrasena" class="form-label">Contraseña</label>
             <input type="contrasena"
               class="form-control" name="contrasena" id="contrasena" aria-describedby="helpId" value="<?php echo $row['contrasena']; ?>">
             
           </div>

           <div class="mb-3">
             <label for="correo" class="form-label">Correo</label>
             <input type="email"
               class="form-control" name="correo" id="correo" aria-describedby="helpId" value="<?php echo $row['correo']; ?>">
             
           </div>
   
          <button type="submit" class="btn btn-success">Agregar</button>
          <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
   
       </form>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php include ("../../templates/footer.php"); ?>