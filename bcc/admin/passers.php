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
<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
	<a rel="facebox" href="addcourse.php" id="addq"><img src="../images/edit.gif">Add Course</a>
	 
</h1>
		<div id="print_content">
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th width="40%"  style="border-left: 1px solid #C1DAD7"> Name </th>
					<th width="20%"> Course </th>
					<th width="20%"> Score </th>
					<th width="20%"> Remarks </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../db.php');
				$ccccc=$_POST['course'];
				$results = mysql_query("SELECT * FROM score");
				while($rows = mysql_fetch_array($results))
					{
					$score=$rows['passing'];	
					}
				$result = mysql_query("SELECT * FROM student WHERE score>='$score' AND course='$ccccc' ORDER BY score DESC");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].'</td>';
						echo '<td><div align="center">'.$row['course'].'</div></td>';
						echo '<td><div align="center">'.$row['score'].'</div></td>';
						echo '<td><div align="center">Passed</div></td>';
						echo '</tr>';
					}
				?> 
			</tbody>
		</table>
		</div>
		<a href="#" onClick="window.open('preview.php?id=<?php echo $ccccc;?>','mywindow','scrollbars=yes,width=1050,height=700')">Preview</a>
		
</div>
</body>
</html>
