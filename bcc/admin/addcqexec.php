<?php
include('../db.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$qcode='QID-'.createRandomPassword();
$course = clean($_POST['course']);
$cat = clean($_POST['category']);
$question = clean($_POST['question']);
$ans = clean($_POST['ans1']);
$aBook=$_POST['opt'];
mysql_query("INSERT INTO question (question, answer, course, cat, qid)
VALUES ('$question','$ans','$course','$cat','$qcode')");
mysql_query("INSERT INTO choices (question, opt)
VALUES ('$qcode','$ans')");
$N = count($aBook);
for($i=0; $i < $N; $i++)
{
mysql_query("INSERT INTO choices (question, opt)
VALUES ('$qcode','$aBook[$i]')");
}
header("location: questioner.php");
?>