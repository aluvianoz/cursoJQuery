<?php

$a = $_POST['num1'];
$b = $_POST['num2'];
$op = $_POST['operacion'];
sleep(2);

switch ($op) {
  case 'suma':
      $res = $a + $b;
    break;
    case 'resta':
      $res = $a -$b;
      break;
  case 'multiplicacion':
      $res = $a*$b;
    break;
  case 'division':
      $res = $a/$b;
    break;
}

echo json_encode(array("num1"=>$a,"num2"=>$b,"resultado"=>$res));
 ?>
