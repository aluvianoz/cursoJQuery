<?php

include('conexion.php');

$con = db_conn();

$id = $_POST['id'];

$q= "SELECT * FROM usuarios WHERE id=$id;";
$res= $con->query($q);

$datos = array();

while($row = $res->fetch_assoc()){
    $datos[]=$row;
}

echo json_encode($datos);










 ?>
