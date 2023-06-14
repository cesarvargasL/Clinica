<?php 
$id=$_GET['id'];
include('conexion.php');

$sql="DELETE FROM doctores WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<meta http-equiv="refresh" content="0; url=../../secciones/usuarios/index.php" />