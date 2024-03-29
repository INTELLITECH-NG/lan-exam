
<?php
//Start session
session_start();
 
//Include database connection details
require_once('../db.php');
 
//Array to store validation errors
$errmsg_arr = array();
 
//Validation error flag
$errflag = false;
 
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
$username = clean($_POST['username']);
$password = clean($_POST['password']);

 
//Create query
$qry="SELECT * FROM facilatator WHERE username='$username' AND password='$password'";
$result=mysql_query($qry);
 
//Check whether the query was successful or not
if($result) 
{
	if(mysql_num_rows($result) > 0) {
	//Login Successful
	session_regenerate_id();
	$member = mysql_fetch_assoc($result);
	$_SESSION['SESS_MEMBER_ID'] = $member['id'];
	$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
	$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
	session_write_close();
	header("location: facilatatorhome.php");
	exit();
	}
	else {
		//Login failed
		$errmsg_arr[] = 'user name and password not found';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
		}
	}
}
else {
die("Query failed");
}
?>