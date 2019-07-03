<?php
include('../db.php');
$questionid=$_POST['qqqq'];
$answer=$_POST['answer'];
$student=$_POST['student'];
$essay=$_POST['essay'];
$N = count($questionid);
mysql_query("UPDATE student SET easy='$essay', status='notcheckessay' where id='$student'");
for($i=0; $i < $N; $i++)
	{
	$ip_sqlq=mysql_query("SELECT * FROM question WHERE qid='$questionid[$i]' AND answer='$answer[$i]'");
		$countq=mysql_num_rows($ip_sqlq);
		if($countq==1)
		{
			mysql_query("UPDATE student SET score=score+1  where id='$student'");
		}
	}
header("location: scorepage.php?id=$student");
?>