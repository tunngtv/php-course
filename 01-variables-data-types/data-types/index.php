<?php

/**
 * Data Types in PHP
 * 
 * PHP supports several data types:
 * 1. String: A sequence of characters enclosed in quotes.
 * 2. Integer: Whole numbers without a decimal point.
 * 3. Float (or Double): Numbers with a decimal point.
 * 4. Boolean: Represents two possible values: true or false.
 * 5. Array: A collection of values stored in a single variable.
 * 6. Object: An instance of a class.
 * 7. NULL: A special type that represents a variable with no value.
 * 8. Resource: A special variable that holds a reference to an external resource (like a database connection).
 */

// String
$title = "Learn PHP From Scratch";
var_dump($title); // Outputs: string(20) "Learn PHP From Scratch"
echo "<br>";

// Integer
$year = 2025;
var_dump($year); // Outputs: int(2025)

// Float
$price = 19.99;
var_dump($price); // Outputs: float(19.99)
echo "<br>";

// Boolean
$isAvailable = true;
var_dump($isAvailable); // Outputs: bool(true)
echo "<br>";

// Array
$fruits = ["Apple", "Banana", "Cherry"];
var_dump($fruits); // Outputs: array(3) { [0]=> string(5) "Apple" [1]=> string(6) "Banana" [2]=> string(6) "Cherry" }
echo "<br>";

// Object
class Car
{
  public $brand;
  public $model;
  public $year;
  public function __construct($brand, $model, $year)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
  }
}

$myCar = new Car("Toyota", "Corolla", 2020);
var_dump($myCar); // Outputs: object(Car)#1 (3) { ["brand"]=> string(6) "Toyota" ["model"]=> string(7) "Corolla" ["year"]=> int(2020) }