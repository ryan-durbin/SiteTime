<?php
require_once'nogo/core.inc.php';
require_once'nogo/config.php';


if (loggedin()){

if(isset($_GET['site'])){
$site = $_GET['site'];
$uSite = esc(trim(dot($site)));
echo $uSite."<br />";
    $sql="SELECT * FROM {$uSite} ORDER BY ID DESC LIMIT 1";
    $result = mysql_query($sql);
    while($row = mysql_fetch_assoc($result)){
        print_r($row);
    }
} else {
header('Location: http://www.siteti.me/profile.php');
die();
}

    


?>


<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../js/dygraph-combined.js"></script>   
</head>
<body>

<div id="container">
<div id="head">
<?php include'content/header.php'; ?>
</div><!-- end head -->

<div id="nav">
<?php include'content/nav.php'; ?>
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
				
				$result = mysql_query("SELECT * FROM '$site' ORDER BY ID DESC LIMIT $offset, $sitePing");
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
<?php include'content/footer.php'; ?>
</div><!-- end foot -->
</div><!-- end container -->
</body>
</html>
<?php

} else {
	
header('Location: http://www.siteti.me/');
	
}
?>