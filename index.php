<?php
require_once'nogo/core.inc.php';
require_once'nogo/config.php';

//this is the echo in the header or some shit
//echo $pings[0] . " pings of " . $sites[0] . " sites.";
?>
<html>
    <header>
        <LINK href="style.css" rel="stylesheet" type="text/css">
    </header>
    <body>
        <div id="container">
            <div id="header"><?php include "content/header.php"; ?></div>

        </div>
        <div class="bread"><?php include'nogo/core.bread.php' ?></div>
        <div class="clear"></div>
        <div id="body">
            <div class="clear"></div>
            <div id="nav"><?php include "content/nav.php"; ?></div><!-- end nav -->
            <div id="body3"><?php if(loggedin()){
                
            } else {
                echo '<div class="nfs"><p>This service is currently not public, to join the private beta <a href="mailto:beta@siteti.me">Email</a> the team.</p></div>';
            } ?>

            </div>
        </div>

        <div id="footer"><?php include 'content/footer.php'; ?></div>
    </div>
</body>
</html>