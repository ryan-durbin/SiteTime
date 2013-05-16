<?php
require_once'../nogo/config.php';

$result = mysql_query("SELECT * FROM sites");

while($row = mysql_fetch_array($result)) {

    mysql_query("INSERT INTO $host VALUES('', '$status', '$ping', '$errno', CURDATE(), CURTIME())");

}
?>



