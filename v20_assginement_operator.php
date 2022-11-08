<?php
$number1 = 10;
$number1 += 2;
echo $number1;
echo '<br>';
$text = 'hello';
$text .= 'lakshmi';
echo $text;
echo '<br>';

$number1++;
echo $number1;
echo '<br>';
$number1--;
echo $number1;
echo '<br>';

$snumber = '10';
if( $snumber  == $number1)
{
 echo 'equal';
} else {
 echo 'not equal ';
 echo '<br>';
}


if( $number1 === $snumber)
{
 echo 'equal ';
} else {
 echo 'not equal ';
 echo '<br>';
}

$counter =1;
while($counter<=10)
{
 echo $counter;
 $counter++;
 echo '<br>';
}

do{
 echo 'this execute atleast once';
}while(0);

for($counter=1;$counter<=10;$counter++)
{
 echo "hi";
 echo '<br>';
}

$counter=2;
switch($counter)
{
 case 1:
  echo "counter is $counter";
  break;
 case 2:
  echo "counter is $counter";
  break;
 default:
  echo "there is no counter";
}

// die(); and exit();

echo "vijaya";
echo '<br>';
die ('error:this is end of the line');
echo "lakshmi";

// @mysql_connect('localhost', 'root', '') or die('could not connect database');

// ehco 'connect database';