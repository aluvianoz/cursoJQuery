<?php

include('conexion.php');
$con= db_conn();
$id = $_POST['id'];

$q = "DELETE FROM usuarios WHERE id=$id";
$con->query($q);

echo "ok";
 ?>
