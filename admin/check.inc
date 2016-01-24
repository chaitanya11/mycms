<?php
require_once("../db/connection.inc");
estcon("localhost","root","");
selcdb("mycms");
function check($username,$password){
$query = "SELECT * FROM login WHERE usrname='$username' AND pascode='$password' LIMIT 1";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	if($row){
		session_start();
		$_SESSION["user"] = $row['usrname'];
		$_SESSION["cat"] = $row['category'];
		header('Location: http://localhost/mycms/layouts/layout1.php');
	}
	else{
		echo "invalid credentials";
	}
}
?>
