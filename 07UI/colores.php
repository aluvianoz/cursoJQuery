<?php

$conexion= new mysqli("localhost","root","","colores");
$color = $_GET['q'];
$res=$conexion->query("SELECT * FROM color WHERE nombre LIKE '%$color%';");

$datos=array();
while ($row = $res->fetch_assoc()) {
  $datos[]= $row['nombre'];
}
 echo json_encode($datos);

 ?>
