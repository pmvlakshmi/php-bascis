<?php
//MyName is a function name.
function MyName() {

echo " lakshmi";
echo '<br>';
}

echo 'my name is ';
//call to the function.
MyName();

//here number1 and number 2 are the aruguments.
function add($number1,$number2)
{
$result = $number1 + $number2;
echo $result;
echo '<br>';
}
//call function with aruguments.
add(10,2);
add(11,6);

//here number1 and number 2 are the aruguments.
function sub($number1,$number2)
{
$result = $number1 - $number2;
return $result;

}
//call function with aruguments.
echo sub(10,2);
echo '<br>';
echo sub(11,6);
echo '<br>';
