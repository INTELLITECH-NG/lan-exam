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

</div>


		<div id="formContainer">

			<form id="login" name="login" method="post" action="login.php" style="height: 222px;" onsubmit="return validateForm()">

				
				<h1>
				<div style="width: 100%; float:left;">
				<strong>BCC- Computerized Examination</strong>
				<br>Login your account!</br>
				</div>
				<div class="clearfix"></div>
				</h1>
				<input type="text" name="username" id="loginEmail" placeholder="Username" style="width: 240px;" />

				<input type="password" name="password" id="loginPass" placeholder="Password" style="width: 240px;" />

				<input type="submit" id="buttonxxxx" name="submit" value="Login" />

			</form>

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

	<div id="footer">
		&copy 2012 BCC- Computerized Examination. All rights reserved. Powered by <a href="#" target="_blank">begie</a>
	</div>

    <!-- JavaScript includes -->

	<script src="jquery-1.7.1.min.js"></script>

		<script src="script.js"></script>


    

</body>

</html>



