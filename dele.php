<?php
include("connection.php");
$s_id=$_GET['delete_id'];
$query = "DELETE FROM info WHERE s_id='$s_id'"; 
$r = mysqli_query($con,$query);
header("Location:showlist.php"); 
?>
