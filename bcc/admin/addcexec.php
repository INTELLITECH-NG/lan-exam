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
$code = clean($_POST['code']);
$desc = clean($_POST['desc']);

mysql_query("INSERT INTO courses (course_code, course_description)
VALUES ('$code','$desc')");
header("location: courses.php");
?>