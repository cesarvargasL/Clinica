<?php 
// include ("../../templates/header.php"); 
include ("conexion.php");

$id = $_GET['id']; // Variable for historial ID
// $id_consultorio = $_GET['id']; // Variable for consultorio ID

$sql = "SELECT * FROM consultas WHERE id = $id";
// $sql2 = "SELECT * FROM consultorio WHERE id = $id_consultorio";

$resultado = $con->query($sql);
// $resultado2 = $con->query($sql2);

?>
<div class="card">
    <div class="card-header">
    <h3>Consultas anteriores</h3>

    </div>

    </br>

    <div class="card-body">

<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Motivo</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $resultado->fetch_assoc()) {?>
            <tr class="">
                <td scope="row"><?php echo $row['motivo'] ?></td>
            </tr>
           
        </tbody>
    </table>
</div>
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tratamiento</th>
                <th scope="col">Duracion</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><?php echo $row['tratamiento'] ?></td>
                <td><?php echo $row['duracion'] ?></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Medicamentos</th>
                <th scope="col">Radiografias</th>
                <th scope="col">Nueva Consulta</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row"><?php echo $row['medicamentos'] ?></td>
                <td><?php echo $row['radiografias'] ?></td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="../../secciones/consultas/crear.php" role="button">Agregar consulta</a>
                    <?php } ?>
            </tr>
            
        </tbody>
    </table>
</div>

    </div>
    </div></br>