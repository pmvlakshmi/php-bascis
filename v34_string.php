<?php
$string = 'This is example of string .';

// syntax: str_word_count($string, arugument=1 or 2(optional), NEED TO PRINT SYMBOLS AND COUNT AS WORD(OPTIONAL) )
$string_word_count = str_word_count($string);
echo $string_word_count;
echo '<br>';
$string_word_count = str_word_count($string, 1);
print_r($string_word_count);
echo '<br>';
// if second arugument 1.
// Array ( [0] => This [1] => is [2] => example [3] => of [4] => string )
$string_word_count2 = str_word_count($string, 2);
print_r($string_word_count2);
echo '<br>';
// if second arugument 2 then array is position of the staring of the word.for example 0 to 'this' then 'is' statrs 5 postion thats y array is 5 for 'is'.
// Array ( [0] => This [5] => is [8] => example [16] => of [19] => string )
$string_word_count3 = str_word_count($string, 1, '&.!*');
print_r($string_word_count3);
echo '<br>';
// Array ( [0] => This [1] => is [2] => example [3] => of [4] => string [5] => . )

//used to random generate names.
$string1 = 'abcdefgh12345&*^%$';
$string_shuffled = str_shuffle($string);
echo $string_shuffled;
echo '<br>';
$string_shuffled1 = str_shuffle($string1);
echo $string_shuffled1;
echo '<br>';

//syntax: substr( string $string , int $start [, int $length ])
$sub_string = substr($string, 0, 6);
echo $sub_string;
echo '<br>';
//combination of sub string and shuffled
$combination = substr($string_shuffled, 0, 4);
echo $combination;
echo '<br>';

//syntax: strlen( string $string )
$string_length = strlen($string);
echo $string_length;
echo '<br>';
//combination of sub string and string length
$combination1 = substr($string_shuffled, 0, $string_length/2);
echo $combination1;
echo '<br>';

//syntax: strrev( string $string )
$string_reverse = strrev($string);
echo $string_reverse;
echo '<br>';

//used following strings for comparing similarities between strings.
$str1 = 'this is vijaya lakshmi.';
$str2 = 'hi my self lakshmi';
//syntax: similar_text( string $first , string $second [, float $percent ])
similar_text($str1, $str2, $percentage);
echo $percentage;
echo '<br>';

// trimed white space to left to right.
$str3 = ' hi lakshmi  ';
echo $str3;
echo '<br>';
//syntax:trim( string $str [, string $character_mask = " " ])
$str_trim = trim($str3);
echo $str_trim;
echo '<br>';

//addslashes and stripslashes
$str4 = ' my bag contains full of "books" <img src = "image.jpeg"> ';
$add_slashes = addslashes($str4);
echo $add_slashes;
echo '<br>';
$strip_slashes = stripslashes($add_slashes);
echo $strip_slashes;
echo '<br>';
$html_entities = htmlentities($add_slashes);
echo $html_entities;
echo '<br>';



