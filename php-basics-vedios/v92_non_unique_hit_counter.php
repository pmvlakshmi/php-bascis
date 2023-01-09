<?php

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

// Display the counter value
echo "This page has been accessed $count times.";

?>