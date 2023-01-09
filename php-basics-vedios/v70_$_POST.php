<?php
$data = "search value";
// Check if the "q" parameter is set in the query string
if (isset($_POST['q'])) {
  // Get the value of the "q" parameter
  $query = $_POST['q'];
  // print_r($query);

 if ($query == $data){
  echo "matched";
 }
 else {
  echo "Not match";
 }
} else {
  // The "q" parameter is not set, so display a form for the user to enter a search query
  ?>
  <form action="v70_$_POST.php" method="post">
    <input type="text" name="q">
    <input type="submit" value="Search">
  </form>
  <?php
}