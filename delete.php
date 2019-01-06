<?php
include'connect.php';
@$del = $_GET['id'];
$sql = mysqli_query($con, "DELETE from records where id = '".$del."'");
if($sql)
{
	header("location:showdata.php");
}
else
{
	echo "not delete this data";
}
?>