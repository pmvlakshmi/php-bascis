<?php
$name = $_SERVER['SCRIPT_NAME'];
echo $name;
echo '<br>';
// To get the current URL of the page:
$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $current_url;
echo '<br>';

// To get the user's IP address:
$user_ip = $_SERVER['REMOTE_ADDR'];
echo $user_ip;
echo '<br>';

// To get the current script's file path:
$current_script_path = $_SERVER['SCRIPT_FILENAME'];
echo $current_script_path;
echo '<br>';

// To get the user agent string:
$user_agent = $_SERVER['HTTP_USER_AGENT'];
echo $user_agent;
