<?php
include('../db.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$id = clean($_POST['id']);
$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$username = clean($_POST['username']);
$password = clean($_POST['password']);

mysql_query("UPDATE facilatator SET firstname='$fname', lastname='$lname', username='$username', password='$password' WHERE id='$id'");
header("location: facilatator.php");
?>