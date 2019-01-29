<?php

include 'Calculator.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Requested-With');
header('Access-Control-Allow-Credentials: true');

$response = [];

$payload = file_get_contents('php://input');
$data = json_decode($payload);

$num1 = intval($data->num1);
$num2 = intval($data->num2);

if (!isset($num1) || trim($num1) === '') {
  $response['errors'][] = 'num1 cannot be empty';
}

if (!isset($num2) || trim($num2) === '') {
  $response['errors'][] = 'num2 cannot be empty';
}

if (empty($response['errors'])) {
  $response = Calculator::calculate($data->type, $num1, $num2);
}

echo json_encode($response);