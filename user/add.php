<?php
require_once'../nogo/core.inc.php';
require_once'../nogo/config.php';
if(!loggedin()) {
header('location: http://www.siteti.me/index.php');
} else {


//this is the echo in the header or some shit
//echo $pings[0] . " pings of " . $sites[0] . " sites.";

?>
<html>
<header>
<LINK href="../style.css" rel="stylesheet" type="text/css">
</header>
<body>
<div id="container">
<div id="header"><?php include '../content/header.php'; ?></div>
</div>
<div class="clear"></div>
<div id="body">
<div id="nav">nav</div><!-- end nav -->
<div id="body2">body</div>
</div>

<div id="footer"><?php include '../content/footer.php'; ?></div>
</div>
</body>
</html>

<?PHP } ?>