<?php include ("../../templates/header.php"); ?>

<br/>
<h1>Usuarios</h1>
<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">
        Agregar usuarios
    </a>
    </div>
    <div class="card-body">
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha de ingreso</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Joaquin Quiroga</td>
                <td>*****</td>
                <td>joaquinquiroga@gmail.com</td>
                <td>11/06/2022</td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Historial</a>
                |<a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                |<a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
</div>

<?php include ("../../templates/footer.php"); ?>