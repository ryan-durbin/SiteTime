<?php
  //connect

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sitetime";
$sql = mysql_connect($db_host, $db_user, $db_pass)or die("Couldnt Connect to SQL database. <p>Contact your system Administrator.");

mysql_select_db($db_name, $sql)or die ("Couldn't find SQL database. <p>Contact your system Administrator.");


//functions
function ping($host, $port, $timeout) {
  $status = "Down";
  $ip = gethostbyname($host);
  $tB = microtime(true);
  $fP = fSockOpen($ip, $port, $errno, $errstr, $timeout);
  $tA = microtime(true);
  $ping = round((($tA - $tB) * 1000), 0);
  if($fP){ if($errno <= 0) { $status = "Online"; }}
	mysql_query("INSERT INTO $host VALUES('', '$status', '$ping', '$errno', CURDATE(), CURTIME())");
  fclose($fP);
  }
?>