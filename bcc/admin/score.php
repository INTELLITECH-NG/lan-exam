<?php
	require_once('auth.php');
?>
<html>
<head>
<title>Computerized Examination</title>
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
<link rel="stylesheet" href="../febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="../argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/application.js" type="text/javascript" charset="utf-8"></script>	
</head>
<body>
<div id="mainwrapper">
<h1>
<a id="addq" href="adminhome.php" title="click to enter homepage" style="background-image:url('../images/out.png'); background-repeat:no-repeat; padding: 3px 12px 12px; margin-right: 10px;"></a>
<?php
				include('../db.php');
				$result = mysql_query("SELECT * FROM score");
				while($row = mysql_fetch_array($result))
					{
					$score=$row['passing'];	
					}
				?> 
<form action="updatepassing.php" method="post">				
<label for="filter">Passing Score</label> <input type="text" name="score" id="filter" value="<?php echo $score; ?>" />
<input type="submit" value="Update">
</form>	 
</h1>
</div>

</body>
</html>
