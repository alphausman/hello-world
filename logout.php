<?php
include 'connect.php';
session_start();
session_destroy();
//session_unset();
echo"Logged out successfully";

?>