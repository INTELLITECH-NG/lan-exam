<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["login"]["username"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
var x=document.forms["login"]["password"].value;
if (x==null || x=="")
  {
  alert("Reference number must be filled out");
  return false;
  }
}
</script>
<script type="text/javascript">
function validateForms()
{
var x=document.forms["regs"]["adminpass"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
var x=document.forms["regs"]["position"].value;
if (x==null || x=="")
  {
  alert("Position must be filled out");
  return false;
  }
var x=document.forms["regs"]["regusername"].value;
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
var x=document.forms["regs"]["regpassword"].value;
if (x==null || x=="")
  {
  alert("Password must be filled out");
  return false;
  }
}
</script>
<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>Computerized Examination</title>

        

        <!-- Our CSS stylesheet file -->

        <link rel="stylesheet" href="styles.css" />

        

        <!--[if lt IE 9]>

          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <![endif]-->

    </head>

    

<body>
<div id="header">
	<div id="headercontent">
		<a id="addq" href="../index.php" title="click to the back link to enter home page" style="background-image:url('../images/out.png'); background-repeat:no-repeat; padding: 6px 12px 12px; margin-right: 10px;"></a>
		BCC- Computerized Examination
	</div>
	<div id="headercontent1">
		BCC- Computerized Examination
	</div>
</div>
	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
</div>


		<div id="formContainer">

			<form id="login" name="login" method="post" action="login.php" style="height: 222px;" onsubmit="return validateForm()">

				
				<h1>
				<div style="width: 190px; float:left;">
				<strong>BCC</strong>
				<br>Login your account!</br>
				</div>
				<div style="width: 60px; float:right;">
				<a href="#" id="flipToRecover" class="flipLink">Register User</a>
				</div>
				<div class="clearfix"></div>
				</h1>
				<input type="text" name="username" id="loginEmail" placeholder="Username" style="width: 240px;" />

				<input type="password" name="password" id="loginPass" placeholder="Reference number" style="width: 240px;" />

				<input type="submit" id="buttonxxxx" name="submit" value="Login" />

			</form>

			<form id="recover" name="regs" method="post" action="register.php" style="height: 360px;" onsubmit="return validateForms()">
				<h1>
				<div style="width: 60px; float:left;">
				<a href="#" id="flipToLogin" class="flipLink">Back To Login</a>
				</div>
				<div style="width: 208px; float:right;">
				Welcome to
				<strong>BCC</strong>
				Register a new account!
				</div>
				<div class="clearfix"></div>
				</h1>
				<input type="text" name="refnum" id="loginEmail" placeholder="Reference Number" style="width: 240px;" />
				<input type="text" name="username" id="loginEmail" placeholder="Username" style="width: 240px;" />
				<select name="course" id="loginEmail" style="width: 240px;">
					<?php
					include('../db.php');
					$result = mysql_query("SELECT * FROM courses ORDER BY course_code ASC");
					while($row = mysql_fetch_array($result))
						{
						echo '<option value="'.$row['course_code'].'">'.$row['course_code'].'</option>';
						}
					?>
				</select>
				<input type="text" name="fname" id="loginEmail" placeholder="First Name" style="width: 240px;" />
				<input type="text" name="lname" id="recoverEmail" placeholder="Lastname" style="width: 240px;" />
				<input type="text" name="mname" id="recoverEmail" placeholder="Middle Name" style="width: 240px;" />
				<input type="submit" id="buttonxxxx" name="submit" value="Save" />
			</form>

		</div>

	<div id="footer">
		&copy 2012 BCC- Computerized Examination. All rights reserved. Powered by <a href="#" target="_blank">begie</a>
	</div>

    <!-- JavaScript includes -->

	<script src="jquery-1.7.1.min.js"></script>

		<script src="script.js"></script>


    

</body>

</html>



