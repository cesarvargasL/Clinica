<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultoriofisioterapia";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>