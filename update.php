<?php
include("connection.php");
if(isset($_POST['submit'])){
	 
	
	

 $id = $_GET['edit_id'];
 $name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	
$q = " update info set s_id=$id, name='$name', email='$email',phone='$phone',address='$address' where s_id=$id  ";
 $query = mysqli_query($con,$q);
 if($res){
 header('location:showlist.php');
 }
 else{
	header('location:showlist.php');
;	 }}
?>