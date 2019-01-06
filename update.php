<?php
include "connect.php";
error_reporting(0);
$upd  = $_GET['up'];
$sql = mysqli_query($con,"select * from records where id= '$upd'");
$res = mysqli_fetch_array($sql);
//print_r($res);
if(isset($_POST['save']))
{
	$name    =  $_POST['name'];
	$email   =  $_POST['email'];
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
	
	$query  = mysqli_query($con, "UPDATE records set fname = '$name', email = '$email', address = '$add', gender = '$gender', img = '$photu' where id = '$upd'");
	
	if($query)
	{
		header("location:showdata.php");
	}
	
}

?>

<html>
<head><title>Record</title></head>

<body>
<form method = "post" enctype="multipart/form-data"  >
<table>
<tr>
<td>Id</td><td><input type="text" name="id" value = "<?php echo $res['id']; ?>"></td>
</tr>
<tr>
<td>Name</td><td><input type="text" name="name" value = "<?php echo $res['fname']; ?>"></td>
</tr>
<tr>
<td>Email</td><td><input type="email" name="email" value = "<?php echo $res['email']; ?>"></td>
</tr>
<tr>
<td>Address</td><td><input type="text" name="address" value = "<?php echo $res['address']; ?>"></td>
</tr>
<tr>
<td>Gender</td>
<td>
Male<input type="radio" name="gender" value="Male" checked>
Female<input type="radio" name="gender" value="Female">
</td>
</tr>
<tr>
<td>Image</td><td><input type="file" name="image" value =  img src ="<?php echo $res['img']; ?>" width="100" height="100""></td>
</tr>
<tr>
<td></td><td><input type="submit" name="save" value="UPDATE"></td>
</tr>
</table>
</form>
</body>
</html>