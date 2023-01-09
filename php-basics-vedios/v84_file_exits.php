<?php
//  the file_exists() function is used to check whether a file or directory exists at a given path.
// It returns a boolean value indicating whether the file or directory exists or not
$file = 'READMEss.md';
if (file_exists($file)) {
  echo 'The file exists';
} else {
  echo 'The file does not exist';
  $create_file = fopen('example.txt', 'w');
  fwrite($create_file, 'nothing');
  fclose($create_file);
}

$dir = '/var/www/html/practice/php-bascis';
if (file_exists($dir)) {
  echo 'The directory exists';
} else {
  echo 'The directory does not exist';
}

//the unlink() function will only delete the file if the current user has permission to delete it.
// If the file is locked or if the user does not have sufficient permissions,
// the function will return false and the file will not be deleted.
$file = 'delete.txt';
if (file_exists($file) && unlink($file)) {
  echo 'The file was deleted successfully';
} else {
  echo 'The file could not be deleted';
}

// rename() function will only work if the current user has permission to rename or move the file.
// If the file is locked or if the user does not have sufficient permissions, 
// the function will return false and the file will not be renamed or moved.
$filename = 'README.md';
$rand = rand(10000,99999);
if(rename($filename, $rand.'.txt')) {
 echo 'file'. $filename .'has renamed' . $rand .'.txt';
} else {
 echo 'not renamed';
}