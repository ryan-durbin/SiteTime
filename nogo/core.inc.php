<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$server = $_SERVER['HTTP_HOST'];

$userInfo['user_ID'] = $_SESSION['ID'];
$userInfo['username'] = $_SESSION['username'];

function loggedin() {
if (isset($_SESSION['ID'])&&!empty($_SESSION['ID'])) {
	return true;
} else {
	return false;
}
}
?>