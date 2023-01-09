<?php
$file_name = $_FILES['fileToUpload']['name'];
$size = $_FILES['fileToUpload']['size'];
$type = $_FILES['fileToUpload']['type'];
$temp_name = $_FILES['fileToUpload']['tmp_name'];
$error = $_FILES['fileToUpload']['error'];
echo $file_name . '<br>';
echo $size .'<br>';
echo $type . '<br>';
echo $temp_name . '<br>';
echo $error . '<br>';

if(isset($file_name)) {
 if (!empty($file_name)) {
  $target_dir = '/php-bascis/uploads/';
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
 }
 else {
  echo " please choose a file";
 }
}
//you will need to use a different value for enctype: "multipart/form-data".
// This encoding type is used for forms that contain file input elements and
// is necessary for the form data to be properly transmitted to the server when a file is uploaded.
?>
<form action="v87_upload_file.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</form>