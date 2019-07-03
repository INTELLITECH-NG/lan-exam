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
$desc = clean($_POST['desc']);
$code = clean($_POST['code']);

mysql_query("UPDATE courses SET course_code='$code', course_description='$desc' WHERE id='$id'");
header("location: courses.php");
?>