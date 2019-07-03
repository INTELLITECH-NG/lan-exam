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
$user = clean($_POST['username']);
$pass = clean($_POST['password']);

mysql_query("UPDATE admin SET username='$user', password='$pass' WHERE id='$id'");
header("location: admininfo.php");
?>