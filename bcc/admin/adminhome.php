<?php
	require_once('auth.php');
?>
<html>
<head>
<title>Computerized Examination</title>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="../src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="../lib/jquery.js" type="text/javascript"></script>
<script src="../src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : '../src/loading.gif',
		closeImage   : '../src/closelabel.png'
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
</head>
<body>
<div id="mainwrapper" style="width: 641px; margin-top: 12px;">
	<h1>
	Welcome Admin
	<div style="float:right; width:auto;"><a href="index.php">logout</a>
	</div>
	</h1>
	<div id="homecontent" style="width: 100%;">
	<div style="float:left; width:auto; padding:10px;"><a href="student.php" id="addq"><img src="images/Student-id-icon.png" height="64" width="64"><br>Student</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="facilatator.php" id="addq"><img src="images/administrator-icon.png" height="64" width="64"><br>Facilatator</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="courses.php" id="addq"><img src="images/Courses-icon.png" height="64" width="64"><br>Courses</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="reference.php" id="addq"><img src="images/Numbers-icon.png" height="64" width="64"><br>Reference No.</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="essay.php" id="addq"><img src="images/picture-check-icon.png" height="64" width="64"><br>Check Essay</a></div>
	<div style="float:left; width:auto; padding:10px;"><a rel="facebox" href="selectcourse.php" id="addq"><img src="images/semi-success-icon.png" height="64" width="64"><br>Passers</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="questioner.php" id="addq"><img src="images/Test-paper-icon.png" height="64" width="64"><br>Questioner</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="admininfo.php" id="addq"><img src="images/admin-privilege-icon.png" height="64" width="64"><br>Admin info</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="subject.php" id="addq"><img src="images/subject.png" height="64" width="64"><br>Subject</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="score.php" id="addq"><img src="images/score-icon.png" height="64" width="64"><br>Passing Score</a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="instruction.php" id="addq"><img src="images/Zero-Gravity-Toilet-Safety-Instructions-icon.png" height="64" width="64"><br>Instruction</a></div>
	
		<div class="clearfix"></div>
	</div>

</div>
</body>
</html>
