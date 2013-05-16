<?php

  //connect
$db_host = "localhost";
/* durb.co database*/
$db_user = "rymn_sitetime";
$db_pass = "skkdjf092oj20udms";
$db_name = "rymn_sitetime";
/*  localhost 
$db_user = "root";
$db_pass = "";
$db_name = "sitetime";
*/
$sql = mysql_connect($db_host, $db_user, $db_pass)or die("Something went wrong. <p>Contact the webmaster at ryan@allthedurbin.com");

mysql_select_db($db_name, $sql)or die ("Something went wrong. <p>Contact the webmaster at ryan@allthedurbin.com");



//functions
function esc($escapestring123){
 $escapestring123 = mysql_real_escape_string($escapestring123);
 echo $escapestring123;
}

function dot($pregreplace123){
 $pregreplace123 = strtolower($pregreplace123);
 $pregreplace123 = preg_replace('/[.]/', '_', $pregreplace123);
 echo $pregreplace123;
}



function ping($host, $port, $timeout) {
  $host = mysql_real_escape_string($host);
  $status = "Down";
  $ip = gethostbyname($host);

      $tB = microtime(true);
  $fP = fSockOpen($ip, $port, $errno, $errstr, $timeout);
      $tA = microtime(true);
  $ping = round((($tA - $tB) * 1000), 0);
        if(isset($fP)&&($errno==0)){ $status = "Online";}
  $clean_host = strtolower($host);
  $clean_host = preg_replace('/[.]/', '_', $clean_host);
  $pingsql = "INSERT INTO $clean_host(ID, status, ping, errno, date, time) VALUES ('', '".$status."', '".$ping."', '".$errno."', CURDATE(), CURTIME())";
	mysql_query($pingsql);
	if($errno!=0){
        $errsql = "INSERT INTO _down(ID, site, status, ping, errno, date, time) VALUES ('', '$host', '".$status."', '".$ping."', '".$errno."', CURDATE(), CURTIME())";
	mysql_query($errsql);
        }
  fclose($fP);
  }



//function count_all($count) {
// $dtb = mysql_query("SHOW TABLES");
// $jmltbl = 0;
// $ttl_record = 0;
// $jml_record = 0;
//
// while ($row = mysql_fetch_array($dtb)) {
//    $sql1 = mysql_query("SELECT * FROM " . $row[0]);
//    $jml_record = mysql_num_rows($sql1);
//    $jmltbl++;
//    $ttl_record += $jml_record;
// }
//	switch ($count) {
//    	case "pings":
//         	echo $ttl_record;
//       	 	break;
//   	 	case "tables":
//        	echo $jmltbl;
//        	break;
//	}
//}

function userSites() {
global $userInfo;
$user = $userInfo['user_ID'];
    $sql="SELECT website FROM _sites WHERE UserID = '$user'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_assoc($result)){
        echo '<a href="http://www.siteti.me/site.php?site='.$row['website'].'">'.$row['website'].'</a>';
        echo '<br />';
    }
}
?>