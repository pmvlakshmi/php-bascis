<?php

$max = getrandmax();
$random_number = rand(0, $max);
echo "A random number between 0 and $max is $random_number.";
echo '<br>';

$diece = rand(1, 6);
echo $diece;