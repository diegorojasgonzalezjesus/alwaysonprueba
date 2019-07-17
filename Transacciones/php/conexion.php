<?php
$host="localhost";
$user="root";
$password="";
$db="usuarios";
$con = new mysqli($host,$user,$password,$db);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

?>