<?php
include ("../../templates/header.php");
include ("conexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores enviados desde el formulario
    $primernombre = $_POST['primernombre'];

    // Preparar la consulta preparada
    $sql = "INSERT INTO historial (primernombre) VALUES (?)";

    // Preparar la declaración
    $stmt = mysqli_prepare($con, $sql);

    // Vincular los parámetros y sus tipos de datos
    mysqli_stmt_bind_param($stmt, 's', $primernombre);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        // La inserción se realizó correctamente
        echo "Datos insertados correctamente";
    } else {
        // Hubo un error en la inserción
        echo "Error al insertar los datos: " . mysqli_error($con);
    }

    // Cerrar la declaración y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>

<!-- Resto del código HTML -->
