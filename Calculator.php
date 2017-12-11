<?php

/**
 * Simple Calculator.
 *
 * @author Daniel Peters
 * @version 1.0
 */
class Calculator
{
  /**
   * Do addition.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   * @return float result
   */
  public static function addition(float $num1, float $num2): float
  {
    return ($num1 + $num2);
  }

  /**
   * Do subtraction.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   * @return float result
   */
  public static function subtraction(float $num1, float $num2): float
  {
    return ($num1 - $num2);
  }

  /**
   * Do multiplication.
   *
   * @param float $num1 first number
   * @param float $num2 second number
   * @return float result
   */
  public static function multiplication(float $num1, float $num2): float
  {
    return ($num1 * $num2);
  }

  /**
   * Do division.
   * @param float $num1 first number
   * @param float $num2 second number
   * @return float result
   */
  public static function division(float $num1, float $num2): float
  {
    return ($num1 / $num2);
  }
}