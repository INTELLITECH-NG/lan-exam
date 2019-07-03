
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db.php');

$id=$_POST['instruction'];
 $sql = "UPDATE instruction SET instruction='$id'";
 mysql_query( $sql);
header("location: instruction.php");
?>