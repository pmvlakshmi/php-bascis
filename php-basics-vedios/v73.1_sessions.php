<?php
//check once v73_sessions.php
  session_start();

  // Retrieve data from the session
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  echo $name . '<br>';
  echo $email;
?>