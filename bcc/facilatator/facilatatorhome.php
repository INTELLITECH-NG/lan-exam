<?php
	require_once('auth.php');
?>
<html>
<head>
<title>Computerized Examination</title>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<style>
	body{
		background: none repeat scroll 0 0 green;
		height:100%;
		width:100%;
		padding: 0;
		margin:0;
		font:14px/1.3 'Segoe UI',Arial, sans-serif;
	}
	#header{
		position:absolute;
		top:0;
		padding:10px ;
		background-color: #252525;
		width:100%;
		background-image: url("twitter_web_sprite_bgs.png");
		background-repeat: repeat-x;
		color:#BBBBBB;
		font-size:11px;
		font-family:arial;
	}
	#headercontent{
		margin:0 auto;
		width:100%;
		text-align:center;
		float:left;
		padding-left: 10px;
	}
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
	</style>
		<script type="text/javascript">
function validateForm()
{
  {
  alert("Test has been activated");
  }
}
</script>
</head>
<body>
<div id="mainwrapper" style="width: 641px; margin-top: 12px;">
	<h1>
	Welcome 
	<?php echo $_SESSION['SESS_FIRST_NAME'] ?>&nbsp; <?php echo $_SESSION['SESS_LAST_NAME'] ?>
	<div style="float:right; width:auto;"><a href="index.php">logout</a>
	</div>
	</h1>
	<div id="homecontent" style="width: 100%;">
		<form action="startexam.php" method="post" onsubmit="return validateForm()">
		<input type="hidden" name="facilatator" class="ed" value="<?php echo $_SESSION['SESS_FIRST_NAME'].' '.$_SESSION['SESS_LAST_NAME'] ?>">
		Time(in minutes):<br>
		<input type="text" name="time" class="ed"><br>
		Course:<br>
		<select name="course" class="ed">
		<?php
		include('../db.php');
		$result = mysql_query("SELECT * FROM courses ORDER BY course_code ASC");
		while($row = mysql_fetch_array($result))
			{
			echo '<option value="'.$row['course_code'].'">'.$row['course_code'].'</option>';
			}
		?>
		</select><br>
		<input type="submit" name="Submit" value="save" id="button1" />
		</form>
		<div class="clearfix"></div>
	</div>

</div>
</body>
</html>
