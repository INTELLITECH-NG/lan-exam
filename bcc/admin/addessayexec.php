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
$course = clean($_POST['course']);
$cat = clean($_POST['category']);
$question = clean($_POST['question']);
mysql_query("INSERT INTO question (question, course, cat)
VALUES ('$question','$course','$cat')");
header("location: questioner.php");
?>