<?php
include('../db.php');
$facilatator=$_POST['facilatator'];
$time=$_POST['time'];
$course=$_POST['course'];
mysql_query("UPDATE student SET facilatator='$facilatator', duration='$time' where course='$course'");
header("location: facilatatorhome.php");
?>