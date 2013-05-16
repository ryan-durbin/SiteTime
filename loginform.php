<?php

if(isset($_POST['username'])&&isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);
	
	if(!empty($username)&&!empty($password)) {

		$query = "SELECT `ID` FROM _users WHERE `username`='$username' AND `password`='$password_hash'";
		$query_run = mysql_query($query)or die(mysql_error());
		$query_num_rows = mysql_num_rows($query_run);
		if($query_num_rows == 0) {
			/*invalid login*/
		echo '<p class="error">Invalid username/password</p>';	
		} else {
			/*valid login*/
			if($query_num_rows== 1 ) {
			$user_ID = mysql_result($query_run, 0, 'ID');
			$_SESSION['ID']=$user_ID;
			$_SESSION['username']=$username;
			header('location: profile.php');
			}
		}
		

	} else {
		echo '<div class="error">Enter a username and password.</div>';	
	}
}

?>


<form action="<?php echo $current_file; ?>" method="POST" id="login">

User: <input type="text" name="username" size="10"/>
Pass: <input type="password" name="password" size="13"/>
<input type="submit" value="login" /><br />
<a href="register.php">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="content/reset.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</form>
