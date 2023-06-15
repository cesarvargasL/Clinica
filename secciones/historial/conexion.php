<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultoriofisioterapia";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>