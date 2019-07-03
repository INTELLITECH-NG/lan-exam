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
	
	 
</h1>
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th width="30%"  style="border-left: 1px solid #C1DAD7"> Name </th>
					<th width="10%"> Course </th>
					<th width="55%"> Answer </th>
					<th width="5%"> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../db.php');
				$result = mysql_query("SELECT * FROM student WHERE status='notcheckessay'");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].'</td>';
						echo '<td>'.$row['course'].'</td>';
						echo '<td>'.$row['easy'].'</td>';
						echo '<td><div align="center"><a rel="facebox" href="check.php?id='.$row['id'].'&course='.$row['course'].'" title="Click To Edit"><img src="../images/check.png"></a></div></td>';
						echo '</tr>';
					}
				?> 
			</tbody>
		</table>
</div>
</body>
</html>
