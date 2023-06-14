<?php include ("../../templates/header.php"); ?>

<br/>
<h1>Usuarios</h1>
<div class="card">
    <div class="card-body">
<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Nombre</th>
                <!-- <th scope="col">contraseña</th> -->
                <th scope="col">Correo</th>
                <!-- <th scope="col">Fecha de ingreso</th> -->
            </tr>
        </thead>
        <tbody>
                    <?php
                    include 'conexion.php';

                    $query = "SELECT * FROM doctores";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            // echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            // echo "<td>" . $row['contrasena'] . "</td>";
                            echo "<td>" . $row['correo'] . "</td>";
                            echo '<td>
                                    <input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar">
                                    <input name="btnborrar" id="btnborrar" class="btn btn-danger" type="button" value="Eliminar">
                                  </td>';
                            echo "</tr>";
                        }
} else {
                        echo "<tr><td colspan='3'>No hay registros</td></tr>";
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
        <!-- <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Joaquin Quiroga</td>
                <td>*</td>
                <td>joaquinquiroga@gmail.com</td>
                <td>11/06/2022</td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="#" role="button">Historial</a>
                |<a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                |<a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
            </tr>
        </tbody> -->
    </table>
</div>

    </div>
</div>

<?php include ("../../templates/footer.php"); ?>
