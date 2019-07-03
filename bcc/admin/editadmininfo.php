<?php
include('../db.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM admin where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$code=$row['username'];
	$desc=$row['password'];
  }
?>
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
<form name="myForm" action="editadmininfoexec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
Username <br />
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>"/>
<input name="username" type="text" class="ed" id="brnu" value="<?php echo $code?>"/>
<br>
Password <br />
<input name="password" type="text" class="ed" id="brnu" value="<?php echo $desc?>"/>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>

