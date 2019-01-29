<?php

/**
 * Simple Calculator.
 *
 * @author Daniel Peters
 * @version 1.0
 */
class Calculator {
  const ADDITION = 'addition';
  const SUBTRACTION = 'subtraction';
  const MULTIPLICATION = 'multiplication';
  const DIVISION = 'division';

  /**
   * Do addition.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   *
   * @return float result
   */
  public static function addition (float $num1, float $num2): float {
    return ($num1 + $num2);
  }

  /**
   * Do subtraction.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   *
   * @return float result
   */
  public static function subtraction (float $num1, float $num2): float {
    return ($num1 - $num2);
  }

  /**
   * Do multiplication.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   *
   * @return float result
   */
  public static function multiplication (float $num1, float $num2): float {
    return ($num1 * $num2);
  }

  /**
   * Do division.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   *
   * @return float result
   */
  public static function division (float $num1, float $num2): float {
    return ($num1 / $num2);
  }

  public static function calculate (string $action, $num1, $num2): array {
    $response = [];
    switch ($action) {
      case Calculator::ADDITION:
        $response['result'] = Calculator::addition($num1, $num2);
        break;
      case Calculator::SUBTRACTION:
        $response['result'] = Calculator::subtraction($num1, $num2);
        break;
      case Calculator::MULTIPLICATION:
        $response['result'] = Calculator::multiplication($num1, $num2);
        break;
      case Calculator::DIVISION:
        if ($num2 == 0) {
          $response['errors'][] = 'division by 0 not allowed';
        } else {
          $response['result'] = Calculator::division($num1, $num2);
        }
        break;
      default:
        $response['errors'][] = 'undefined operation';
    }

    return $response;
  }
}