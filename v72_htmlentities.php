<?php
$name = $_POST['name'];
echo $name . '<br>';
$email = $_POST['email'];
echo $email . '<br>';
$name = htmlentities($_POST['name']);
echo $name . '<br>';
$email = htmlentities($_POST['email']);
echo $email . '<br>';

?>
<form action="v72_htmlentities.php" method="post">
<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br>
<label for="email">Email:</label><br>
<input type="email" id="email" name="email"><br>
<input type="submit" value="Submit">
</form>