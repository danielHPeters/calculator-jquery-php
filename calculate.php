<?php

include 'Calculator.php';

header('Content-Type: application/json');

$res = [];

$num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT );
$num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT );

if(trim($num1) === ''){
  $res['errors'][] = 'num1 cannot be empty';
}

if(trim($num2) === ''){
  $res['errors'][] = 'num2 cannot be empty';
}

if(empty($res['errors'])) {
  switch ($_POST['type']) {
    case 'add':
      $res['result'] = Calculator::addition($num1, $num2);
      break;
    case 'subtract':
      $res['result'] = Calculator::subtraction($num1, $num2);
      break;
    case 'multiply':
      $res['result'] = Calculator::multiplication($num1, $num2);
      break;
    case 'divide':
      if ($num2 == 0) {
        $res['errors'][] = 'division by 0 not allowed';
      } else {
        $res['result'] = Calculator::division($num1, $num2);
      }
      break;
    default:
      $res['errors'][] = 'undefined operation';
  }
}

echo json_encode($res);