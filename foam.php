<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	

$query="INSERT into info (name , email , phone , address) values ('$name','$email','$phone','$address')";
	$r=mysqli_query($con,$query);
    
if($query)
{
header("Location:showlist.php"); 
}
else
{
echo "Unable to insert records.";
}

}


?>


<div class="container register-form">
            <div class="form">
                <div class="note">
                
                    <p>Student Register Form</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <form method="post">
                                <input type="text" class="form-control" placeholder="student  Name *"  name="name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="student Email *" name="email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address*" name="address" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="phone *" name="phone" />
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit" name="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>





</body>
</html>