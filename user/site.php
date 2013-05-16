<?php
function time_start() {
	global $timeparts,$starttime;
	$timeparts = explode(" ",microtime());
	$starttime = $timeparts[1].substr($timeparts[0],1);
	$timeparts = explode(" ",microtime());
	}

function time_end() {
	global $timeparts,$starttime;
	$endtime = $timeparts[1].substr($timeparts[0],1);
	return bcsub($endtime,$starttime,6);
	}
time_start();
session_start();
//if (isset($_SESSION)){
require_once'../nogo/config.php';
if(isset($_GET['site'])){
$site = $_GET['site'];
} else {
echo "No site..";
die();
}



$sitePings= mysql_query("SELECT COUNT(*) FROM pings WHERE website='$site'");
$sitePings = mysql_fetch_array($sitePings);
$sitePing = $sitePings[0];
//only if there is a limit  Don't forget to change limir in sql in hjavascript to change limit and make graph work
$sitePing = '1300';

?>


<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../js/dygraph-combined.js"></script>   
</head>
<body>

<div id="container">
<div id="head">
<?php include'header.php'; ?>
</div><!-- end head -->

<div id="nav">
<?php include'navigation.php'; ?>
</div><!-- end nav -->

<div id="body">
<div id="status">
--status--
</div><!-- end body/status -->
<div id="history">
<div id="graphdiv" style="width:800px; height:300px;"></div>
<script type="text/javascript">
  g = new Dygraph(

    // containing div
    document.getElementById("graphdiv"),

    // CSV or path to a CSV file.
"Date,Pings\n" +
	<?php 
				$offset=0;
				
				$result = mysql_query("SELECT * FROM pings WHERE website='allthedurbin.com' ORDER BY ID DESC LIMIT $offset, $sitePing");
				$Num = '0';
				
				while($row = mysql_fetch_array($result)) {
					$Num++;
				if($row['ping'] <= "3900"){$ping = $row['ping']; }else{ $ping = "0"; }
				echo '"';
				echo preg_replace('#[-]#','/',$row['date']);
				echo " ".$row['time'].", ".$ping."\\n";
				echo '" ';
				
				if($Num != $sitePing){
					echo "+\n";
				}
}
?>

  );
</script>

</div><!-- end body/history -->
<div id="extra">
--extra--
</div><!-- end body/extra -->
</div><!-- end body -->
<div id="foot">
<?php include'footer.php'; ?>
</div><!-- end foot -->
</div><!-- end container -->
</body>
</html>
<?php

//} else {
	
//header('Location: http://www.siteti.me/');
	
//}
echo time_end();
?>