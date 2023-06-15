<?php 
include ("../../templates/header.php"); 
include ("conexion.php");

$id = $_GET['id'];
//$id2 = $POST['id'];
// Variable for historial ID
// $id_consultorio = $_GET['id']; // Variable for consultorio ID

$sql = "SELECT * FROM historial WHERE id = $id";
// $sql2 = "SELECT * FROM consultorio WHERE id = $id_consultorio";

$resultado = $con->query($sql);
// $resultado2 = $con->query($sql2);

?>


<br/>
<h1>Historial</h1>
<a name="" id="" class="btn btn-primary" 
href="../../secciones/historial/crear.php" role="button">

        Agregar Historial
    </a>
    <a name="" id="" class="btn btn-primary" 
    href="../../secciones/consultas/formconsultas.php"  role="button">
        Agregar consulta
    </a>
</br>
</br>

<div class="card">
    <div class="card-header">
    <h3>Datos personales</h3>

    </div>

    <div class="card-body">
<div class="table-responsive-sm">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Primer nombre</th>
                <th scope="col">Segundo nombre</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $resultado->fetch_assoc()) {?>
            <tr class="">
                <td scope="row"><?php echo $row['primernombre'] ?></td>
                <td><?php echo $row['segundonombre'] ?></td>
                <td><?php echo $row['primerapellido'] ?></td>
                <td><?php echo $row['segundoapellido'] ?></td>


            </tr>
        </tbody>
    </table>
</div>
<div class="table-responsive-sm">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Direccion</th>
                
                <th scope="col">Lugar de Nacimiento</th>
                <th scope="col">Procedencia</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><?php echo $row['direccion'] ?></td>
                <td><?php echo $row['lugardenacimiento'] ?></td>
                <td><?php echo $row['procedencia'] ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="table-responsive-sm">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Ocupacion</th>
                <th scope="col">CI</th>
                <th scope="col">Estado Civil</th>
                <th scope="col">Edad</th>
                <th scope="col">Sexo</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><?php echo $row['ocupacion'] ?></td>
                <td><?php echo $row['ci'] ?></td>
                <td><?php echo $row['estadocivil'] ?></td>
                <td><?php echo $row['edad'] ?></td>
                <td><?php echo $row['sexo'] ?></td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
</div>

</br>

<div class="card">
    <div class="card-header">
    <h3>Antecedentes</h3>

    </div>

    <div class="card-body">

<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Hereditarios y familiares</th>
                <th scope="col">Personales patologicos</th>
                <th scope="col">Personales no patologicos</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><?php echo $row['hereditariosyfamiliares'] ?></td>
                <td><?php echo $row['personalespatologicos'] ?></td>
                <td><?php echo $row['personalesnopatologicos'] ?></td>

            </tr>
        </tbody>
    </table>
</div>


    </div>
</div>
<?php include ("../../secciones/consultas/index.php"); ?>
</br>
<?php } ?>

<!-- <a name="" id="" class="btn btn-info" 
        href="../../secciones/consultas/index.php" role="button">

        Consultas
    </a> -->


<a name="" id="" class="btn btn-info" 
        href="../../secciones/pacientes/index.php" role="button">

        Volver
    </a>
</br>
</br>


<?php include ("../../templates/footer.php"); ?>