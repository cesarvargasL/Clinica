<?php 
include('conexion.php');
include ("../../templates/header.php"); 

$sql = "SELECT * FROM pacientes";

// echo $sql;

$resultado = $con->query($sql);
?>


<br/>
<h1>Pacientes</h1>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">
        Agregar registro
    </a>
    </div>
    <div class="card-body">
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">CI</th>
                <!-- <th scope="col">Fotos</th> -->
                <th scope="col">Fecha de Consulta</th>
                <th scope="col">Hora de Consulta</th>
                <!-- <th scope="col">Motivo de Consulta</th> -->
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
        <?php while ($row = $resultado->fetch_assoc()) {?>
            <tr class="">
                <td scope="row"><?php echo $row['primernombre'] ?> </td>
                <td><?php echo $row['ci'] ?></td>
                <td>imagen.jpg</td>
                <td><?php echo $row['fecha_consulta'] ?></td>
                <td><?php echo $row['horaconsulta'] ?></td>
                 
                <td>
                    <a name="" id="" class="btn btn-primary" href="../../secciones/historial/index.php?id=<?php echo $row['id']; ?>" role="button">Historial</a>
                    <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                    <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
        <?php } ?>

            </tr>
        </tbody>
    </table>
</div>

    </div>
</div>

<?php include ("../../templates/footer.php"); ?>