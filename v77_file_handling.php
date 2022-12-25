<?php
  $file = fopen('file.txt', 'w');
  fwrite($file, 'Hello, World!');
  fclose($file);
?>
