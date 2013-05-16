<?php
require_once'../nogo/config.php';

$tables = mysql_query("show tables");
$string = '';
while ($table_data = mysql_fetch_row($tables)){
if($table_data[0] != "_pings" && $table_data[0] != "_users" && $table_data[0] != "_sites"){
    $string.=$table_data[0].',';
}
}
$ALL_TABLES = substr($string,0,strlen($string)-1);
print_r($ALL_TABLES);

?>