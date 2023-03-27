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
echo '.........<br>';
$string_shuffled1 = str_shuffle($string1);
echo $string_shuffled1;
echo '.............<br>';

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
for ($x; $x<=$string_length; $x++){
 echo $x . '<br>';
}
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

echo strtolower($string);
echo '<br>';
echo strtoupper($string);
echo '<br>';

$string_position = 'The quick brown fox jumps over the lazy dog and fox.';
$substring = 'fox';
$pos = strpos($string_position, $substring);
if ($pos !== false) {
    echo "The substring was found at position $pos";
    echo '<br>';
} else {
    echo 'The substring was not found';
    echo '<br>';
}
$offset = 0;
$string_length = strlen($substring);
while ($str_pos = strpos($string_position, $substring, $offset)) {
 echo $substring . ' finds at position ' . $str_pos . '<br>';
 $offset = $str_pos + $string_length ;
}

// syntax: str_replace(search, replace, subject, count);
$subject = "The quick brown fox jumps over the lazy dog.";
$search = "fox";
$replace = "cat";
$result = str_replace($search, $replace, $subject);
echo $result;
echo 'str_replace...................<br>';

$subject = "The quick brown fox jumps over the lazy dog.";
$search = array("fox", "dog");
$replace = array("cat", "mouse");
$result = str_replace($search, $replace, $subject);
echo $result;
echo '<br>';

// syntax: substr_replace(string, replacement, start, length);
$string = "The quick brown fox jumps over the lazy dog.";
$replacement = "cat";
$result = substr_replace($string, $replacement, 16, 3);
echo $result;
echo '<br>';

$string = "The quick brown fox jumps over the lazy dog.";
$replacement = "cat";
$result = substr_replace($string, $replacement, -4, -3);
echo $result;
echo '<br>';

// str_ireplace() is a function in PHP that performs a case-insensitive search
$string = "Hello World!";
$search = "world";
$replace = "PHP";
$result = str_ireplace($search, $replace, $string);
echo $result;
echo '........................<br>.';

// addcslashes is a PHP function that adds slashes to specified characters in a string.
$string = "Hello, world!";
$charlist = "Hweo"; // add a slash before H, w, e, and o
$result = addcslashes($string, $charlist);
echo $result;
echo '<br>';

$string = "This is a 'test' string.";
$result = addslashes($string);
echo $result;
echo '<br>';

$string = "apple,banana,orange";
$array = explode(",", $string);
print_r($array);
echo $array[1];
echo '<br>';

$string1 = "This is a &quot&lt;test&gt;&quot."; 
$string2 = htmlentities($string1);
$decoded = html_entity_decode($string2);
echo $decoded;
echo '<br>';

// Join array elements into a string
$array = array('apple', 'banana', 'cherry');
$string = implode(', ', $array);
// Display the resulting string
echo $string; 
echo '<br>';

$string = "Hello, World!";
$string = lcfirst($string);
// Display the resulting string
echo $string; // output: hello, World!
echo '<br>';

$string = "   Hello, World!";
$string1 = ltrim($string);

$string2 = ltrim($string,",");
echo $string1;
echo '<br>';
echo $string2;
echo '<br>';

$string = "Hello, World!";
$hash = md5($string);
echo $hash;
echo '<br>';

// Remove trailing whitespace from a string
$string = " Hello, World!   \n";
$trimmed_string = rtrim($string);
// Display the resulting string
echo $trimmed_string; // output: " Hello, World!"
echo '<br>';

// Calculate the similarity between two strings
$string1 = "Hello, World!";
$string2 = "Hello, everyone!";
similar_text($string1, $string2, $percent);
// Display the similarity percentage
echo "The two strings are $percent% similar.";
echo '<br>';

// Format a string using placeholders
$name = "Alice";
$age = 25;
$string = sprintf("Hello, my name is %s and I am %d years old.", $name, $age);
// Display the formatted string
echo $string; // output: "Hello, my name is Alice and I am 25 years old."
echo '<br>';

// Read data from a string
$auth = "24\tLewis Carroll";
$n = sscanf($auth, "%d\t%s %s", $age, $firstname, $lastname);
// Display the extracted data
echo "Age: $age<br>";
echo "First Name: $firstname";
echo '<br>';
echo "Last Name: $lastname";
echo '<br>';

// Check if a string contains a substring
$string = "Hello, World!";
$substring = "World";
if (str_contains($string, $substring)) {
    echo "The string '$string' contains the substring '$substring'";
} else {
    echo "The string '$string' does not contain the substring '$substring'";
}
echo '<br>';

// Check if a string ends with a suffix
$string = "Hello, World!";
$suffix = "World!";
if (str_ends_with($string, $suffix)) {
    echo "The string '$string' ends with the suffix '$suffix'";
} else {
    echo "The string '$string' does not end with the suffix '$suffix'";
}
echo '<br>';

// Parse a CSV string into an array
$string = "John,Doe,40\nJane,Smith,35\nBob,Johnson,50";
$rows = str_getcsv($string, "\n"); // Split into rows
$data = array();
foreach ($rows as $row) {
    $data[] = str_getcsv($row); // Split each row into fields
}
print_r($data);
echo '<br>';

$string = "Hello";
$pad_length = 10;
$pad_string = "-";
$pad_type = STR_PAD_BOTH;
$result = str_pad($string, $pad_length, $pad_string, $pad_type);
echo $result;
echo '<br>';

$string = "Hello";
$multiplier = 3;
$result = str_repeat($string, $multiplier);
echo $result;
echo '<br>';

$string = "Hello, World!";
$result = str_split($string);
print_r($result);
echo $result[7];
echo '<br>';

// Check if a string starts with a specific prefix
$string = "Hello, World!";
$prefix1 = "Hello";
$prefix2 = "world";
$result1 = str_starts_with($string, $prefix1); // returns true
$result2 = str_starts_with($string, $prefix2); // returns false
echo "Result 1: " . ($result1 ? "true" : "false") . "\n";
echo "Result 2: " . ($result2 ? "true" : "false") . "\n";
echo '<br>';

$string1 = "apple";
$string2 = "banana";

$result = strcmp($string1, $string2);

if ($result == 0) {
    echo "$string1 and $string2 are equal";
} elseif ($result < 0) {
    echo "$string1 comes before $string2";
} else {
    echo "$string1 comes after $string2";
}
echo '<br>';

$string1 = "cafe";
$string2 = "chateau";

$result = strcoll($string1, $string2);

if ($result == 0) {
    echo "$string1 and $string2 are equal";
} elseif ($result < 0) {
    echo "$string1 comes before $string2";
} else {
    echo "$string1 comes after $string2";
}
echo '<br>';

$string = "hello world";
$chars = "aeiou";
$result = strcspn($string, $chars);
echo "The length of the initial segment of '$string' that contains none of the characters in '$chars' is: $result";
echo '<br>';

$str = '<p>Hello <b>world</b>!</p>';
$clean_str = strip_tags($str);
echo $clean_str; // outputs "Hello world!"
echo '<br>';
$str = '<p>Hello <b>world</b>!</p>';
$allowed_tags = '<b>';
$clean_str = strip_tags($str, $allowed_tags);
echo $clean_str; // outputs "Hello <b>world</b>!"
echo '<br>';

$str = "This is an example of a string with \'slashes\'";
$clean_str = stripcslashes($str);
echo $clean_str;
echo '<br>';

$str = 'The quick brown fox jumps over the lazy dog';
$pos = stripos($str, 'brown');
if ($pos !== false) {
    echo "Found 'brown' at position $pos";
} else {
    echo "'brown' not found";
}
echo '<br>';

$string_with_backslashes = "This is an example string with \'backslashes\'.";
$string_without_backslashes = stripslashes($string_with_backslashes);
echo $string_without_backslashes;
echo '<br>';

$str = 'The quick brown fox jumps over the lazy dog';
$match = stristr($str, 'BROWN');
if ($match !== false) {
    echo "Found '$match'";
} else {
    echo "'BROWN' not found";
}
echo '<br>';

$str1 = "file1.txt";
$str2 = "file10.txt";
$result = strnatcasecmp($str1, $str2);
if ($result < 0) {
    echo "$str1 comes before $str2";
} elseif ($result == 0) {
    echo "$str1 is equal to $str2";
} else {
    echo "$str1 comes after $str2";
}
echo '<br>';

$str1 = "file1.txt";
$str2 = "File10.txt";

$result1 = strnatcmp($str1, $str2);
if ($result1 < 0) {
    echo "$str1 comes before $str2 (strnatcmp)";
} elseif ($result1 == 0) {
    echo "$str1 is equal to $str2 (strnatcmp)";
} else {
    echo "$str1 comes after $str2 (strnatcmp)";
}

echo '<br>';

$result2 = strnatcasecmp($str1, $str2);
if ($result2 < 0) {
    echo "$str1 comes before $str2 (strnatcasecmp)";
} elseif ($result2 == 0) {
    echo "$str1 is equal to $str2 (strnatcasecmp)";
} else {
    echo "$str1 comes after $str2 (strnatcasecmp)";
}
echo '<br>';

$str1 = "Hello World";
$str2 = "hello world";
$result = strncasecmp($str1, $str2, 5);
if ($result < 0) {
    echo "$str1 is less than $str2\n";
} elseif ($result == 0) {
    echo "$str1 is equal to $str2\n";
} else {
    echo "$str1 is greater than $str2\n";
}
echo '<br>';

$str1 = "Hello World";
$str2 = "Hello PHP";
$result = strncmp($str1, $str2, 5);
if ($result < 0) {
    echo "$str1 is less than $str2\n";
} elseif ($result == 0) {
    echo "$str1 is equal to $str2\n";
} else {
    echo "$str1 is greater than $str2\n";
}
echo '<br>';

$str = "Hello World";
$chars = "oe";
$result = strpbrk($str, $chars);
if ($result) {
    echo "Found the first occurrence of any of the characters $chars in $str: $result\n";
} else {
    echo "None of the characters $chars were found in $str\n";
}
echo '<br>';

$str = "Hello World";
$pos = strpos($str, "World");
if ($pos !== false) {
    echo "Found 'World' at position $pos in '$str'\n";
} else {
    echo "Did not find 'World' in '$str'\n";
}
echo '<br>';

$str = "Hello World";
$substr = strrchr($str, "o");
if ($substr) {
    echo "Found last occurrence of 'o' in '$str': '$substr'\n";
} else {
    echo "Did not find 'o' in '$str'\n";
}
echo '<br>';

$str = "Hello World";
$reversed = strrev($str);
echo "Original string: $str\nReversed string: $reversed\n";
echo '<br>';

$str = "Hello World";
$pos = strripos($str, "o");
if ($pos !== false) {
    echo "Found last occurrence of 'o' (case-insensitive) in '$str' at position $pos\n";
} else {
    echo "Did not find 'o' (case-insensitive) in '$str'\n";
}
echo '<br>';

$str = "Hello World";
$pos = strrpos($str, "o");
if ($pos !== false) {
    echo "Found last occurrence of 'o' in '$str' at position $pos\n";
} else {
    echo "Did not find 'o' in '$str'\n";
}
echo '<br>';

$str = "Hello World";
$mask = "HeloWrd";
$len = strspn($str, $mask);
echo "The length of the initial substring of '$str' that contains only characters from '$mask' is $len\n";
echo '<br>';

$str = "Hello World";
$sub = "World";
$result = strstr($str, $sub);
if ($result !== false) {
    echo "Found '$sub' in '$str': '$result'\n";
} else {
    echo "Did not find '$sub' in '$str'\n";
}
echo '<br>';

$str = "The quick brown fox jumps over the lazy dog";
$delimiters = " ";
$token = strtok($str, $delimiters);
while ($token !== false) {
    echo $token . "<br>";
    $token = strtok($delimiters);
}
echo '<br>';

$string = "This is a STRING with SOME UPPER CASE CHARACTERS";
echo strtolower($string);
echo '<br>';

$string = "Hello, world!";
$translation_table = array(
    'H' => 'J',
    'W' => 'V',
    'o' => '0'
);
echo strtr($string, $translation_table);
echo '<br>';

$main_str = "Hello, world!";
$str = "world";
$offset = 7;
$length = 5;
$result = substr_compare($main_str, $str, $offset, $length, true);
if ($result === 0) {
    echo "The two substrings are equal.\n";
} else {
    echo "The two substrings are not equal.\n";
}
echo '<br>';

$haystack = "The quick brown fox jumps over the lazy dog.";
$needle = "o";
$count = substr_count($haystack, $needle);
echo "The substring '$needle' was found $count times in the input string.\n";
echo '<br>';

$string = "The quick brown fox jumps over the lazy dog.";
$replacement = "red";
$start = 10;
$length = 5;
$result = substr_replace($string, $replacement, $start, $length);
echo $result;
echo '<br>';

$string = "Hello world!";
$sub = substr($string, 6, 5);
echo $sub;
echo '<br>';

$string = "   Hello world!   ";
$trimmed = trim($string);
echo $trimmed;
echo '<br>';

$string = "hello world";
$capitalized = ucfirst($string);
echo $capitalized;
echo '<br>';

$string = "hello world";
$capitalized = ucwords($string);
echo $capitalized;
echo '<br>';

$string = "Beyoncé";
$decoded = utf8_decode($string);
echo $decoded;
echo '<br>';

$string = "Beyonce";
$encoded = utf8_encode($string);
echo $encoded;
echo '<br>';

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut ante euismod, cursus mauris id, feugiat augue. Sed faucibus enim in elit tristique, non bibendum eros ultricies. Proin facilisis eleifend sapien, at euismod nulla consequat a.";
$wrapped_text = wordwrap($text, 40, "<br>\n");
echo $wrapped_text;
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';