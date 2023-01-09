<?php
  echo getcwd();
  session_start();

  // Store data in the session
  $_SESSION['name'] = 'John';
  $_SESSION['email'] = 'john@example.com';

  // Retrieve data from the session
  // $name = $_SESSION['name'];
  // $email = $_SESSION['email'];