<?php
require_once'config.php';

$result = mysql_query("SELECT * FROM _pings") or die(mysql_error());
	error_reporting(0);
while($row = mysql_fetch_array($result)) {

$host = strtolower($row['website']);

    mysql_query("INSERT INTO `".$host."` (`ID`, `status`, `ping`, `errno`, `date`, `time`) VALUES
('', '".$row['status']."', '".$row['ping']."', '".$row['errno']."', '".$row['date']."', '".$row['time']."')")or die(mysql_error());
echo $row['ID'];
}
mysql_query("DELETE FROM _pings WHERE ID=`".$row['ID']."`");
?>