<?php
	require_once('auth.php');
?>
<html>
<head>
<title>BCC-Computerized Examination</title>
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
<div id="mainwrapper" style="width:800px;">
<h1>
<a id="addq" href="adminhome.php" title="click to enter homepage" style="background-image:url('../images/out.png'); background-repeat:no-repeat; padding: 3px 12px 12px; margin-right: 10px;"></a>
<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
	<a rel="facebox" href="addquestion.php" id="addq"><img src="../images/edit.gif">Add Question</a>&nbsp;&nbsp;
	<a rel="facebox" href="addessay.php" id="addq"><img src="../images/edit.gif">Add Essay</a> 
</h1>
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th  style="border-left: 1px solid #C1DAD7"> Course </th>
					<th> Category </th>
					<th> Question </th>
					<th> Ans </th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../db.php');
				$result = mysql_query("SELECT * FROM question ORDER BY course and cat ASC");
				while($row = mysql_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['course'].'</td>';
						echo '<td>'.$row['cat'].'</td>';
						echo '<td>'.$row['question'].'</td>';
						echo '<td>'.$row['answer'].'</td>';
						echo '<td><div align="center"><a href="#" id="'.$row['question'].'" class="delbutton" title="Click To Delete"><img src="../images/delete.gif"></a></div></td>';
						echo '</tr>';
					}
				?> 
			</tbody>
		</table>
</div>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletequestion.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
