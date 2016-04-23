<?php

include('conexion.php');

$con = db_conn();
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tel = $_POST['telefono'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass);

$q = "INSERT INTO usuarios (usuario,nombre,app,tel,email,pass)
      VALUES('$usuario','$nombre','$apellido','$tel','$email','$pass');";

$con->query($q);

echo "ok";





 ?>
