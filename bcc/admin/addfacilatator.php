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
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {
  alert("Firstname must be filled out");
  return false;
  }
var a=document.forms["myForm"]["lname"].value;
if (a==null || a=="")
  {
  alert("Lastname must be filled out");
  return false;
  }
var b=document.forms["myForm"]["username"].value;
if (b==null || b=="")
  {
  alert("Username must be filled out");
  return false;
  }
var c=document.forms["myForm"]["password"].value;
if (c==null || c=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
<form name="myForm" action="addfexec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
FirstName <br />
<input name="fname" type="text" class="ed" id="brnu" />
<br>
LastName <br />
<input name="lname" type="text" class="ed" id="brnu" />
<br>
Username <br />
<input name="username" type="text" class="ed" id="brnu" />
<br>
Password <br />
<input name="password" type="text" class="ed" id="brnu" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
