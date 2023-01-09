<?php
// GET requests are more visible to the user, 
// as the data is visible in the URL.
// POST requests are less visible,
// as the data is not visible in the URL.

// GET requests should only be used to retrieve data, 
// not to modify data on the server. 
// POST requests can be used to both retrieve and modify data.


// Check if the "q" parameter is set in the query string
if (isset($_GET['q'])) {
  // Get the value of the "q" parameter
  $query = $_GET['q'];

 if (!empty($query)){
  echo "ok";
 }
 else {
  echo "fill the fields";
 }
} else {
  // The "q" parameter is not set, so display a form for the user to enter a search query
  ?>
  <form action="V69_$_GET_variable.php" method="get">
    <input type="text" name="q">
    <input type="submit" value="Search">
  </form>
  <?php
}