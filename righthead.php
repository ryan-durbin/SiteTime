Hello <?php echo $_SESSION['ID']; ?>, <br />
You have 
<?php 

$UserID = $_SESSION['ID'];

$sql_rh = mysql_query("SELECT * FROM _sites WHERE UserID='$UserID'");

while ($row = mysql_fetch_array($sql_rh)) {
	$host = $row['website'];
	$host = strtolower($host);
  	$clean_host = preg_replace('/[.]/', '_', $host);
	
	$sql1 = mysql_query("SELECT COUNT(*) FROM " . $clean_host);
	echo $host;
	echo "  ";
	echo $sql1;
	
	
}



			?>

<br />
<a href="logout.php">logout</a>