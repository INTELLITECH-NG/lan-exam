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
<form name="myForm" action="addcexec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
Course Code <br />
<input name="code" type="text" class="ed" id="brnu" />
<br>
Course Description <br />
<textarea name="desc"class="ed" id="brnu"></textarea>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
