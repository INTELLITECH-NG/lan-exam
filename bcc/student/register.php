<?php
include('../db.php');
$refnumber=$_POST['refnum'];
$username=$_POST['username'];
$course=$_POST['course'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$stat='used';
$result = mysql_query("SELECT * FROM student where refnumber='$refnumber'");
$count=mysql_num_rows($result);
if($count==0)
{
mysql_query("INSERT INTO student (refnumber, firstname, lastname, middlename, course, username) VALUES ('$refnumber', '$fname', '$lname', '$mname', '$course', '$username')");
mysql_query("UPDATE reference SET owner='$stat' WHERE reference_number='$refnumber'");
header("location: index.php");
}
else{
header("location: index.php");
}
?>