<?php
$string = "My name is vijaya lakshmi";
$vijaya ='vijaya';
$divya = 'divya';
if (preg_match('/divya/', $string)) {
 echo 'divya:match found';
 echo '<br>';
} elseif (preg_match('/vijaya/',$string)) {
 echo 'vijaya:match found';
 echo '<br>';
} else{
 echo 'match not found';
 echo '<br>';
}



$pattern = '/^([a-zA-Z0-9._%+-]+)@([a-zA-Z0-9.-]+)\.[a-zA-Z]{2,4}$/';
$subject = 'user@example.com';

if (preg_match($pattern, $subject, $matches)) {
 print_r($pattern); 
 echo '<br>';
 print_r($subject); 
 echo '<br>';
 print_r($matches); 
 echo '<br>';
    echo 'Username: ' . $matches[1] . ' Domain: ' . $matches[2];
    echo '<br>';
}


function has_space($string) {
 if (preg_match('/ /', $string)) {
  return TRUE;
 } else {
  return FALSE;
 }
}
//here has_space is a function name.
if (has_space('nota space')) {
 echo "atleast one space";
 echo '<br>';
} else { 
 echo "space not available";
 echo '<br>';
}