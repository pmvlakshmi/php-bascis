<?php
// HTML is used to display data in a web browser, 
// while XML is used to store and transport data. 

// HTML defines how data should be displayed in a web browser, 
// while XML does not specify how data should be displayed.

// HTML has a fixed set of tags that define the structure of a document,
// such as <h1> for headings and <p> for paragraphs. 
// XML, on the other hand, allows users to define their 
// own tags and attributes to describe the data in a more meaningful way.

// the simplexml_load_file() function loads an XML file and returns a SimpleXMLElement object that represents the document.
$xml = $xml = simplexml_load_file('books.xml');

// To access elements and attributes in the XML document, you can use the -> operator
$title = $xml->book[0]->title;
$author = $xml->book[0]->author;
$year = $xml->book[0]->year;
// $subtitle = $xml->book[0]->subtitle->one;
echo "Title: $title <br> Author: $author <br> Year: $year <br><br>";
// echo $subtitle . '<br>';
foreach ($xml->book as $book) {
 echo "Title: $book->title <br> Author: $book->author <br> Year: $book->year <br><br>";
 foreach($book->subtitle as $subtitle) {
  echo $subtitle->one . ' and ' . $subtitle->two . '<br>';
 }
}
