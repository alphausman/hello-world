<?php
include 'connect.php';
$query = mysqli_query($con, "select * from records");

//print_r($res);
?>

<html>
<head>
<title>Showdata</title>
</head>

<body>
<h4><a href = "fetch.php">Login<a></h4>
<h5><a href ="insert.php">Sign Up<a></h5>
<table border="1">
<tr><th>Id</th><th>Name</th><th>Email</th><th>Address</th><th>Gender</th><th>Image</th><th>Delete</th><th>Update</th></tr>
<?php
while($row = mysqli_fetch_array($query))
{ ?>
	<tr>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['fname']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['address']; ?></td><td><?php echo $row['gender']; ?></td><td> <img src = "<?php echo  $row['img']; ?>" width="100" height="100"></td>
	<td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
	<td><a href="update.php?up=<?php echo $row['id']; ?>">Update<a></td>
	</tr>
<?php }

?>
</table>
</body>
</html>