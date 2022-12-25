<?php
// Open the file for writing
$file = fopen("data.txt", "w");
// Write some data to the file
$data = "Hello, World!";
fwrite($file, $data);
// Close the file
fclose($file);

// Open the file for reading
$file = fopen("data.txt", "r");
// Read the data from the file
$data = fread($file, filesize("data.txt"));
// Close the file
fclose($file);

//append data means add data without lost of previous data.
$file = fopen("test.txt", "a") or die("Unable to open file!");
$txt = "Appended text\n";
fwrite($file, $txt);
fclose($file);

// The explode Function with File Handling Example
$file = fopen("test.txt", "r") or die("Unable to open file!");
$contents = fread($file, filesize("test.txt"));
fclose($file);
$lines = explode("\n", $contents);
foreach ($lines as $line) {
  echo $line . "<br>";
}

// The implode Function with File Handling Example
$lines = array("Line 1", "Line 2", "Line 3");
$contents = implode("\n", $lines);
$file = fopen("test.txt", "w") or die("Unable to open file!");
fwrite($file, $contents);
fclose($file);

// Print the data
echo $data;
?>
