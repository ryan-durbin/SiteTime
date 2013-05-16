<?php
require_once'../nogo/config.php';


$timeout = 10;


$result = mysql_query("SELECT * FROM _sites WHERE frequency='30'");

while($row = mysql_fetch_array($result)) {
    ping($row['website'], $row['port'], $timeout);
} 


?>



