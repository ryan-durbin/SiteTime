<div id="hLeft"><?php include 'content/lefthead.php' ?></div>

<div id="hRight"> <?php
if(loggedin()) {
include 'content/righthead.php';
} else {
include 'loginform.php';
}
 ?>