<?php include ("../../templates/header.php"); ?>

<br/>
<h1>Historial</h1>
<a name="" id="" class="btn btn-primary" 
        href="crear.php" role="button">

        Agregar Historial
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
            <tr class="">
                <td scope="row">Juaquin</td>
                <td>Juan</td>
                <td>Quiroga</td>
                <td>Cruz</td>
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
                <td scope="row">Av. Jaime Mendoza</td>
                
                <td>Chuquisaca</td>
                <td>Sucre</td>
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
                <td scope="row">Estudiante</td>
                <td>12345678</td>
                <td>Soltero</td>
                <td>20</td>
                <td>Masculino</td>
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
                <td scope="row">Diabetes</td>
                <td>Gastritis</td>
                <td>Ninguno</td>
            </tr>
        </tbody>
    </table>
</div>


    </div>
</div>

</br>

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
            <tr class="">
                <td scope="row">Dolor en la rodilla al caminar porque salto</td>
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
                <td scope="row">Reposo absoluto</td>
                <td>7</td>
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
                <td scope="row">Meloxican</td>
                <td>si</td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="../../secciones/consultas/crear.php" role="button">Agregar consulta</a>

            </tr>
        </tbody>
    </table>
</div>

    </div>

</div></br>
<a name="" id="" class="btn btn-info" 
        href="../../secciones/pacientes/index.php" role="button">

        Volver
    </a>
</br>
</br>


<?php include ("../../templates/footer.php"); ?>