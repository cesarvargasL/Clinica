<?php include ("../../templates/header.php"); ?>

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
                <th scope="col">Fotos</th>
                <th scope="col">Hora de Consulta</th>
                <th scope="col">Fecha de Consulta</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">Juaquin Quiroga</td>
                <td>12345678</td>
                <td>imagen.jpg</td>
                <td>14:00</td>
                <td>11/06/2022</td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="../../secciones/historial/index.php" role="button">Historial</a>
                |<a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                |<a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
</div>

<?php include ("../../templates/footer.php"); ?>