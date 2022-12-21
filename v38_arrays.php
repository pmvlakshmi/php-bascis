<?php
include_once 'include_header.php';
include 'include_header.php';
// bulk of data or list of data stored in one place by using arrays.
$food = array('piza', 'burger', 'icecream');
print_r($food);
echo "<br>";
// Array ( [0] => piza [1] => burger [2] => icecream )
//access values from array.
echo $food[1];
echo "<br>";
//add another value in array.
$food[3] = chicken;
print_r($food);
echo "<br>";
// Array ( [0] => piza [1] => burger [2] => icecream [3] => chicken )


//Associative array : key=>value
$food_calories = array('piza'=>200, 'burger'=>3000, 'icecream'=>1999);
print_r($food_calories);
echo "<br>";
echo $food_calories[icecream];
echo "<br>";


//multidimention array: array inside array
$categories = array('boys'=>array('ramesh', 'lokesh', 'puneeth'),'girls'=>array('lakshmi', 'hemavathi', 'divya'));
print_r($categories);
// Array ( [boys] => Array ( [0] => ramesh [1] => lokesh [2] => puneeth ) [girls] => Array ( [0] => lakshmi [1] => hemavathi [2] => divya ) )
echo "<br>";
//access the values.
echo $categories['boys'][2];
echo "<br>";

$gender = array('boys'=>array('ramesh', 'lokesh', 'puneeth'),'girls'=>array('lakshmi', 'hemavathi', 'divya'));
foreach ($gender as $key => $value) {
 echo '<strong>'.$key .'</strong>' . '<br>';
 foreach ($value as $names) {
  echo $names . '<br>';
 }
}


