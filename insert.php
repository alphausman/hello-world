<?php
include "connect.php";
error_reporting(0);
if(isset($_POST['save']))
{
	$name    =  $_POST['name'];
	$email   =  $_POST['email'];
	$pass    =  $_POST['password'];
	$add     =  $_POST['address'];
	$gender  =  $_POST['gender'];
	
	$photu = "upload/";
	$photu  = $photu.basename($_FILES['image']['name']);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$photu))
	{
		//echo "file has been uploaded";
	}
	else
	{
		 echo"file has not been upload";
	}
	if($name!== '' && $email!== '')
	{
	$query = mysqli_query($con," insert into records(fname,email,password,address,gender,img)values('$name','$email','$pass','$add','$gender','$photu')");
	echo "Data Inserted";
	}
	else
	{
		echo "Data not insert";
	}
	
}

?>

<html>
<head><title>Record</title></head>

<body>
<h5><a href ="showdata.php">Showdata<a><h5>
<form method = "post" enctype="multipart/form-data"  >
<table>

<tr>
<td>Name</td><td><input type="text" name="name"></td>
</tr>
<tr>
<td>Email</td><td><input type="email" name="email"></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td>Address</td><td><input type="text" name="address"></td>
</tr>
<tr>
<td>Gender</td>
<td>
Male<input type="radio" name="gender" value="Male" checked>
Female<input type="radio" name="gender" value="Female">
</td>
</tr>
<tr>
<td>Image</td><td><input type="file" name="image"></td>
</tr>
<tr>
<td></td><td><input type="submit" name="save" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>