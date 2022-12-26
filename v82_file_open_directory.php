<?php
echo getcwd();
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
// opendir() is a function in PHP that allows you to open a directory and read its contents.
// The readdir() function is used to read the contents of the directory, one file or directory at a time.
// The closedir() function is used to close the directory when you're done reading its contents.

$dir = opendir('/var/www/html/practice/php-bascis');
if ($dir) {
  while (($file = readdir($dir)) !== false) {
   if($file != '.' && $file != '..'){
    echo "filename: $file<br>";
    // echo '<a href="'.$dir.'/'.$file.'">'.$file.'</a><br>';
    $a = '/php-bascis/'.basename($file);
    echo '<a href= "'.$a.'" >'.$file.'</a><br>';

   }
  }
  closedir($dir);
}