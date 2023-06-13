<?php
$con =new mysqli("localhost", "root", "","consultoriofisioterapio");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>