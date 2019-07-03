
<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db.php');

$id=$_POST['score'];
 $sql = "UPDATE score SET passing='$id'";
 mysql_query( $sql);
header("location: score.php");
?>