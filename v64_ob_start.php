<?php
// Start output buffering
ob_start();

// Generate some output
echo "Hello, world!";

// Modify the output
$output = ob_get_contents();
$output = str_replace("world", "PHP", $output);
echo $output; //output: Hello, world!Hello, PHP!

// Clear the buffer and send the modified output to the browser
ob_end_clean();
echo $output; //output: Hello, PHP!