<?php
$con =new mysqli("localhost", "root", "","consultoriofisioterapia");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>