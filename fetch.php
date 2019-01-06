<?php
include "connect.php";
error_reporting(0);
//$query = mysqli_query($con,"select * from records");
//$res  = mysqli_fetch_array($query);
//print_r($res);
if(isset($_POST['submit']))
{
	$nm = $_POST['name'];
	$pass = $_POST['pass'];
	
	$sql = mysqli_query($con, "select * from records where email = '".$nm."' and password = '".$pass."'");
	
	if($res= mysqli_fetch_array($sql))
	{
		header("location:showdata.php");
	}
	else
	{
		echo"invalid";
	}
	
	
}


?>
<html>
<head>
<title>Login</title>
</head>
<body>

<form method="post">
<table>
<tr>
<td>Email</td><td><input type="email" name="name"></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="pass"></td>
</tr>
<tr>
<td></td><td><input type="submit" name="submit" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>