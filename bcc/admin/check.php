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
<?php
include('../db.php');
$id=$_GET['id'];
$course=$_GET['course'];
$result = mysql_query("SELECT * FROM student WHERE id='$id'");
	while($row = mysql_fetch_array($result))
		{
		$answer=$row['easy'];
		}
$resulta = mysql_query("SELECT * FROM question WHERE course='$course' AND cat='Essay'");
	while($rowa = mysql_fetch_array($resulta))
		{
		$essay=$rowa['question'];
		}
?>
<form action="updatescore.php" method="post">
<input type="hidden" name="id" value="<?php echo $id ?>" class="ed" /><br>
Question:&nbsp;<?php echo $essay ?>?<br>
Answer:&nbsp;<?php echo $answer ?><br>
Score:&nbsp;<input type="text" name="score" class="ed" /><br>
<input type="submit" name="Submit" value="Calculate" id="button1" />
</form>