<?php

// Check if the "visited" cookie exists
if (!isset($_COOKIE["visited"])) {

  // Open the text file in read/write mode
  $file = fopen("counter.txt", "r+");

  // Read the current value of the counter
  $count = (int)fread($file, filesize("counter.txt"));

  // Increment the counter by 1
  $count++;

  // Seek to the beginning of the file and overwrite the current value of the counter
  fseek($file, 0);
  fwrite($file, $count);

  // Close the file
  fclose($file);

  // Set the "visited" cookie to indicate that the visitor has been counted
  setcookie("visited", true, time() + 3600);
}

// Display the counter value
echo "This page has been accessed $count times by unique visitors.";

?>