<?php
 // This code sets a cookie named name with a value of John and an expiration date of one day (86400 seconds) from the current time.
  setcookie('name', 'John', time() + 86400);

 // unset or destroy cookies.
 // setcookie('name', 'John', time() - 86400);

?>