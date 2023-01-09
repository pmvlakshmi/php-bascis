<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
function display() {
 //access outside variable in inside function to use global keyword.
 global $ip_address;
 echo $in = 'hi ';
 echo 'my ip address is ' . $ip_address;
}
display();