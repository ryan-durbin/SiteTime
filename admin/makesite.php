<?php
require_once'../nogo/config.php';
$site = $_GET['site'];
$port = 80;
//if(isset($_GET['port'])){$port = $_GET['port'];}

$clean_site = mysql_real_escape_string($site);

if(mysql_query("SELECT EXISTS(SELECT * FROM _sites WHERE website = '$clean_site'")==NULL){
    $site1 = preg_replace('/[.]/', '_', strtolower($_GET['site']));
    $user = $userInfo['user_ID']; 
    
    echo "putting $sites1";
mysql_query("CREATE TABLE IF NOT EXISTS `$site1` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `status` varchar(1) NOT NULL,
  `ping` int(4) NOT NULL,
  `errno` int(4) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31681");
mysql_query("INSERT INTO `_sites` (`ID`, `UserID`, `website`, `frequency`, `port`, `active`, `pings`) VALUES
('', '$user', '$site', '120', '$port', 0, 0),");

} else {
    echo "Website exists";
    
}


?>