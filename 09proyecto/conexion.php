<?php

function db_conn(){
  $host='localhost';
  $user='root';
  $pass='';
  $db='jquery_crud';

  $mysql= @new mysqli($host,$user,$pass,$db);
  if (mysqli_connect_errno()) {
    printf(error_db_connect());
    exit();
  }
  return $mysql;
}

 ?>
