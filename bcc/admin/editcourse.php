<?php
include('../db.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM courses where id='$id'");

while($row = mysql_fetch_array($result))
  {
	$code=$row['course_code'];
	$desc=$row['course_description'];
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
<form name="myForm" action="editcexec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
Course Code <br />
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>"/>
<input name="code" type="text" class="ed" id="brnu" value="<?php echo $code?>"/>
<br>
Course Description <br />
<textarea name="desc"class="ed" id="brnu"><?php echo $desc?></textarea>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>

