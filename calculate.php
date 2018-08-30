<?php

include 'Calculator.php';

header('Content-Type: application/json');

$response = [];

$num1 = filter_input(INPUT_POST, 'num1', FILTER_SANITIZE_NUMBER_FLOAT);
$num2 = filter_input(INPUT_POST, 'num2', FILTER_SANITIZE_NUMBER_FLOAT);

if (trim($num1) === '') {
  $response['errors'][] = 'num1 cannot be empty';
}

if (trim($num2) === '') {
  $response['errors'][] = 'num2 cannot be empty';
}

if (empty($response['errors'])) {
  $response = Calculator::calculate($_POST['type'], $num1, $num2);
}

echo json_encode($response);