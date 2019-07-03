<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<div id="print_content">
<table cellpadding="5" cellspacing="0" id="resultTable" border="1">
	
		<tr>
			<td width="40%"> <strong>Name</strong> </th>
			<td width="20%"> <strong>Course</strong> </th>
			<td width="20%"> <strong>Score</strong> </th>
			<td width="20%"> <strong>Remarks</strong> </th>
		</tr>
	<?php
		include('../db.php');
		$ccccc=$_GET['id'];
		$result = mysql_query("SELECT * FROM student WHERE score>='5' AND course='$ccccc' ORDER BY score DESC");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td>'.$row['firstname'].' '.$row['middlename'].' '.$row['lastname'].'</td>';
				echo '<td>'.$row['course'].'</td>';
				echo '<td>'.$row['score'].'</td>';
				echo '<td>Passed</div></td>';
				echo '</tr>';
			}
		?> 
</table>
</div>
<a href="javascript:Clickheretoprint()">Print</a>