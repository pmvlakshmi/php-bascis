<?php
// The include function is used to include a file, 
// and will generate a warning if the file cannot be found, 
// but the script will continue to execute.

// The require function is used to include a file, 
// and will generate a fatal error if the file cannot be found, 
// causing the script to stop execution.

// The include_once() function is used to include a file, 
// and will generate a warning if the file cannot be found, 
// but the script will continue to execute.
// If the file has already been included, it will not be included again.

// The require_once() function is used to include a file, 
// and will generate a fatal error if the file cannot be found, 
// causing the script to stop execution. 
// If the file has already been included, 
// it will not be included again.


$header = '<h1>' . 'Heading for every file'. '</h1>';
echo $header;