<?php
include('../db.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM student WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		$tempscore=$row['score'];
	}
?> 
<html>
<head>
</head>
<body style="background-color:green; width:100%; height:100%; margin:0; padding:0;">
<div style="text-align:center; padding:20px; border:1px solid #fff; width:300px; margin:30px auto; color:#fff;">
<a href="index.php">Logout</a>
</div>
</body>
</html>