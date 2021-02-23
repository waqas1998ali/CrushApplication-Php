<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#userTbl tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
<?php
include("connection.php");
$r = mysqli_query($con,"select * from info"); ?>
     
         <form class="form-inline md-form mr-auto mb-4" style="float:right; margin-right:13%;">
  <input type="text" class="search form-control" placeholder="Search student name?" aria-label="Search" 
  <button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Search</button>
  </form>
 
<table class="table table-striped" id="userTbl" >
        <tr class="header">
      
            <th colspan="7"><h2>Student Record</h2> </th>
         </tr>
   
        <tr>
        
            <th> ID </th>
            <th> Name </th>
            <th> Email </th>
            <th> phone </th>
            <th> address</th>
            <th> Edit</th>
            <th>Delete</th>
        </tr>
   
    <?php 
        foreach($r as $row)
        {
    ?>        
            <tr>
                <td><?php echo $row['s_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a href="edit.php?edit_id=<?php echo $row['s_id']; ?>">Edit</a>
			</td>
			<td>
				<a href="dele.php?delete_id=<?php echo $row['s_id']; ?>"> Delete</a>
			</td>
            </tr>
    <?php     
        }
		
    ?>    
    
    </table>

 
 <a href="foam.php" class="btn btn-info" role="button">Add Record</a>
 


 
<body>
</body>
</html>