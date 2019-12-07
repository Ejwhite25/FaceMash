<?php
include('mysql.php');
if ($handle = opendir('images')) {

while (false !== ($file = readdir($handle))) {
  if($file!='.' && $file!='..') {
   $images[] = "('".$file."')";
  }
 }
 closedir($handle);
}
$query = "INSERT INTO images (filename) VALUES ".implode(',', $images)." ";
if (!mysqli_query($GLOBALS["___mysqli_ston"], $query)) {
 print mysqli_error($GLOBALS["___mysqli_ston"]);
}
else {
 print "finished installing your images!";
}
 
?>
