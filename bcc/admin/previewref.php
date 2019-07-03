<?php
	require_once('auth.php');
?>

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
			<td  style="border-left: 1px solid #C1DAD7"> Reference Number </td>
		</tr>
	<?php
		include('../db.php');
		$result = mysql_query("SELECT * FROM reference WHERE owner!='used'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['reference_number'].'</td>';
				echo '</tr>';
			}
		?> </tbody>
</table>
</div>
<a href="javascript:Clickheretoprint()">Print</a>

