<?php
$_title = "Upload";
require_once __DIR__.'/comp_header.php';
$data = file_get_contents('dictionary.json'); //Vi tager vores data fra vores dictionary.json fil
// Så konverterer vi det til et object
$data = json_decode($data, true); // Bruger [] 
?>

<form id="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
  <h1>Upload dit bedste feriebillede</h1>
  Vælg en fil:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload fil" name="submit">
</form>

<?php
require_once __DIR__.'/comp_footer.php';
?>
