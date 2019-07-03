<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Compurerized Examination</title>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <link href="css/jquery.akordeon.css" rel="stylesheet" type="text/css" />
    <link href="css/demo.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.akordeon.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#buttons').akordeon();
            $('#button-less').akordeon({ buttons: false, toggle: true, itemsOrder: [2, 0, 1] });
        });
    </script>
    <style type="text/css">
        .demobar
        {
            height: 90px;
            line-height: 90px;
        }
        .demobar .fleft
        {
            float: left;
            margin-left: 10px;
        }
        .demobar .fright
        {
            float: right;
            margin-top: 14px;
            margin-right: 10px;
        }
    </style>
    <script type="text/javascript">
	var mins
var secs;

function cd() {
    mins = 1 * m("<?php echo $_SESSION['SESS_LAST_NAME'] ?>"); // change minutes here
    secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
    redo();
}

function m(obj) {
    for(var i = 0; i < obj.length; i++) {
        if(obj.substring(i, i + 1) == ":")
        break;
    }
    return(obj.substring(0, i));
}

function s(obj) {
    for(var i = 0; i < obj.length; i++) {
        if(obj.substring(i, i + 1) == ":")
        break;
    }
    return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
    var disp;
    if(mins <= 9) {
        disp = " 0";
    } else {
        disp = " ";
    }
    disp += mins + ":";
    if(secs <= 9) {
        disp += "0" + secs;
    } else {
        disp += secs;
    }
    return(disp);
}

function redo() {
    secs--;
    if(secs == -1) {
        secs = 59;
        mins--;
    }
    document.cd.disp.value = dis(mins,secs); // setup additional displays here.
    if((mins == 0) && (secs == 0)) {
        document.getElementById('buttons').style.display = 'none'; 
    } else {
        cd = setTimeout("redo()",1000);
    }
}

function init() {
  cd();
}
window.onload = init;
	</script>
	<script type="text/javascript">
function validateForm()
{
  {
  alert("Test has been submitted");
  }
}
</script>
</head>
<body>
<form name="cd" action="saveanswer.php" method="post" onsubmit="return validateForm()">
    <input id="txt" readonly="true" type="text" value="00:10" border="0" name="disp">
	<input type="hidden" name="student" value="<?php echo $_SESSION['SESS_MEMBER_ID'] ?>" />
    
    <div id="demo-wrapper">
    
        <div class="akordeon" id="buttons">
			<div class="akordeon-item expanded">
                <div class="akordeon-item-head">
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            General Instruction
                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        <p>
                            <?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM instruction");
							while($row = mysql_fetch_array($result))
								{
								$instruction=$row['instruction'];	
								echo $instruction;
								}
							?> 
                        </p>
                    </div>
                </div>
            </div>
			<?php
			$results = mysql_query("SELECT * FROM subject ORDER BY id ASC");
			while($rows = mysql_fetch_array($results))
			{
			?>
            <div class="akordeon-item">
                <div class="akordeon-item-head">
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            <?php echo $rows['subject'];?>
                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        <p>
                            <?php
							$course=$_SESSION['SESS_FIRST_NAME'];
							include('../db.php');
							$subject=$rows['subject'];
							$result = mysql_query("SELECT * FROM question WHERE course='$course' AND cat='$subject'");
							while($row = mysql_fetch_array($result))
								{
								echo $row['question'].'?<br>';
								$qid=$row['qid'];
								echo '<input type="hidden" name="qqqq[]" value="'.$qid.'" />';
								echo '<select name="answer[]">';
								echo '<option>Select Answer></option>';
								$resultik = mysql_query("SELECT * FROM choices WHERE question='$qid' ORDER BY RAND() LIMIT 4");
									while($rowik = mysql_fetch_array($resultik))
										{
										echo '<option>';
										echo $rowik['opt'];
										echo '</option>';
										}
								echo '</select><br><br>';
								}
							?>
                        </p>
                    </div>
                </div>
            </div>
			<?php
			}
			?>
			<div class="akordeon-item">
                <div class="akordeon-item-head">
                    <div class="akordeon-item-head-container">
                        <div class="akordeon-heading">
                            Essay
                        </div>
                    </div>
                </div>
                <div class="akordeon-item-body">
                    <div class="akordeon-item-content">
                        <p>
                            <?php
							$course=$_SESSION['SESS_FIRST_NAME'];
							$result = mysql_query("SELECT * FROM question WHERE course='$course' AND cat='Essay'");
							while($row = mysql_fetch_array($result))
								{
								echo $row['question'].'?<br>';
								}
							?>
							<textarea name="essay" style="width:400px; height:100px;"></textarea>
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div style="margin:0 auto; width:70px;">
	<input type="submit" value="Save" style="background: linear-gradient(#4B4B4B, #303030) repeat scroll 0 0 transparent; padding:20px 40px; border: 1px solid black; border-radius:3px; color:#fff; font-weight:bold; font-size:16px; cursor:pointer;">
	</div>
    </form>
   </body>
</html>
