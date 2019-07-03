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
<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["code"].value;
if (x==null || x=="")
  {
  alert("Code must be filled out");
  return false;
  }
var a=document.forms["myForm"]["desc"].value;
if (a==null || a=="")
  {
  alert("Description must be filled out");
  return false;
  }

}
</script>
<form name="myForm" action="addcqexec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
Coure: <br />
<select name="course" id="loginEmail" style="width: 240px;" class="ed">
	<?php
	include('../db.php');
	$result = mysql_query("SELECT * FROM courses ORDER BY course_code ASC");
	while($row = mysql_fetch_array($result))
		{
		echo '<option value="'.$row['course_code'].'">'.$row['course_code'].'</option>';
		}
	?>
</select>
<br>
Subject: <br />
<select name="category" class="ed">
<?php
$result = mysql_query("SELECT * FROM subject ORDER BY id ASC");
while($row = mysql_fetch_array($result))
	{
	echo '<option value="'.$row['subject'].'">'.$row['subject'].'</option>';
	}
?>
</select>
<br>
Question: <br />
<textarea name="question" class="ed" id="brnu"></textarea>
<br>
Answer: <br />
<input type="text" name="ans1" class="ed">
<br>
Option: <br />
<input type="text" name="opt[]" class="ed">
<br>
<input type="text" name="opt[]" class="ed">
<br>
<input type="text" name="opt[]" class="ed">
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
