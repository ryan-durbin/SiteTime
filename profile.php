<?php
require_once'nogo/core.inc.php';


if(!loggedin()){
  header('Location: http://www.siteti.me/register.php');
  die();
} else {
require_once'nogo/config.php';
 
?>
<html>
<header>
<LINK href="../style.css" rel="stylesheet" type="text/css">
</header>
<body>
<div id="container">
<div id="header"><?php include "content/header.php"; ?></div>

</div>
<div class="clear"></div>
<div id="body">
<div id="nav"><?php include "content/nav.php"; ?></div><!-- end nav -->
<div id="body2">
    <div id="p1">
    <?php userSites(); ?>
    </div>
    <div id="p2">
        <ul>
            <li><a href="admin/addsite.php">Add Webstie</a></li>
        </ul>
        
    </div>
    <div id="p3">
        p3
    </div>
    
    
</div>
</div>

<div id="footer"><?php include 'content/footer.php'; ?></div>
</div>
</body>
</html>
<?php } ?>