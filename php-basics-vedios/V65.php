<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$blocked_ip_address = ['127.0.0.1', '100.100.0.1'];
foreach($blocked_ip_address as $ip)
{
 if($ip = $user_ip)
 {
  die('your ip address' . $user_ip . 'is blocked');
 }
}
echo '<h1>welcome</h1>';
