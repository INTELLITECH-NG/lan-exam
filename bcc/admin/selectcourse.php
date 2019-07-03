<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form action="passers.php" method="post">
Coure:<br>
<select name="course" id="loginEmail" class="ed">
	<?php
	include('../db.php');
	$result = mysql_query("SELECT * FROM courses ORDER BY course_code ASC");
	while($row = mysql_fetch_array($result))
		{
		echo '<option value="'.$row['course_code'].'">'.$row['course_code'].'</option>';
		}
	?>
</select><br>
<input type="submit" value="Search" id="button1" />
</form>