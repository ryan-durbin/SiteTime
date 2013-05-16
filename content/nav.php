<?php
if(loggedin()){
   echo '<ul>
       <li><a href ="index.php">Home</a></li>
       <li><a href ="profile.php">Profile</a></li>
       <li><a href ="help.php">Help</a></li></ul>'; 
} else {
    echo '<ul>
       <li><a href ="index.php">Home</a></li>
       <li><a href ="help.php">Help</a></li></ul>'; 
}
?>