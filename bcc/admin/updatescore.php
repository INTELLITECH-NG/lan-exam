<?php
include('../db.php');
$id=$_POST['id'];
$score=$_POST['score'];
mysql_query("UPDATE student SET score=score+'$score', status='ready' where id='$id'");
header("location: essay.php");
?>