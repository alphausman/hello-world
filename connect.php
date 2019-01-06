<?php
$host = "localhost";
$user = "root";
$password = "";
$con = mysqli_connect($host,$user,$password) or die('Not Connected');
mysqli_select_db($con,'sham') or die('data base not selected');

?>
