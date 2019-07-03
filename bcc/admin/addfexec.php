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
$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$username = clean($_POST['username']);
$password = clean($_POST['password']);

mysql_query("INSERT INTO facilatator (firstname, lastname, username, password)
VALUES ('$fname','$lname','$username','$password')");
header("location: facilatator.php");
?>