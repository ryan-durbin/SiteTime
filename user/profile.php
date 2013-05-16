<?php
require_once'../nogo/core.inc.php';
require_once'../nogo/config.php';

if(!isset($_SESSION['username'])){
  header('Location: http://www.siteti.me/login.php');
  die();
} else {
?>
<html>
<header>
<LINK href="../style.css" rel="stylesheet" type="text/css">
</header>
<body>
<div id="container">
<div id="header"><?php include "http:www.sieti.me/content/header.php"; ?></div>

</div>
<div class="clear"></div>
<div id="body">
<div id="nav">nav</div><!-- end nav -->
<div id="body2">body</div>
</div>

<div id="footer"><?php include 'http:www.sieti.me/content/footer.php'; ?></div>
</div>
</body>
</html>
<?php } ?>