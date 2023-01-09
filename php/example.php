<?php

// Declare a variable
$name = "John";

// Print the value of the variable
echo "print a variable: " . $name . '<br>';

//datatypes::scalar
$num1 = 5; // integer
echo "integer datatype: " . $num1 . '<br>';
$num2 = 3.14; // float
echo "float datatype: " . $num2 . '<br>';
$name = "John"; // string
echo "string datatype: " . $name . '<br>';
$result = true; // boolean
if ($result) {
 echo "boolean datatype: " . $result .'<br>';
} else {
 echo "boolean datatype: " . $result . '<br>';
}

//compound types: array
$numbers = [1, 2, 3, 4, 5];
$letters = ['a', 'b', 'c', 'd', 'e'];
echo "array value: " . $numbers[2] . '<br>';
echo "array value: " . $letters[2] . '<br>';
//compound types: object
class Calculator {
 public $x;
 public $y;
 public function __construct($x, $y) {
   $this->x = $x;
   $this->y = $y;
 }
 public function add() {
   return $this->x + $this->y;
 }
}
$calculator = new Calculator(10, 20);
echo $calculator->add();  // Outputs 30