<?php

include('conexion.php');
$con = db_conn();

$id = $_POST['id'];
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$pass = $_POST['pass'];


if(empty($pass)){
  $q="UPDATE usuarios SET usuario='$usuario',nombre='$nombre',app='$apellido',tel='$telefono',email='$email'
      WHERE id=$id;";
}
else{
  $pass=md5($pass);
  $q="UPDATE usuarios SET usuario='$usuario',nombre='$nombre',app='$apellido',tel='$telefono',email='$email',pass='$pass'
      WHERE id=$id;";
}

$con->query($q);

echo "ok";




 ?>
