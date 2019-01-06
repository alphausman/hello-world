<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("sham", $connection); // Selecting Database
//Fetching Values from URL
error_reporting(0);
?>

<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.s1').keyup(function(){
	 var nam = $('.n1').val();
	 var datastring = 'name='+ nam;
	 alert(datastring);
	 
	 $.ajax({
		 
		 type: "GET",
		 url : "ajre.php",
		 data : datastring,
		 cache : false,
		 success:function(result){
			 alert(result);
			$('.search').html(html).show(); 
			 
		 }
		 
	 });
	 return false;
});   
});   

</script>

</head>

<body>

<form>
<table>

<tr>
<td>Name</td><td><input type="text" name="name" class="n1"></td>
</tr>
<tr>
<td></td><td><input type="text" name="serch" class="search"></td>
</tr>


<tr>
<td></td><td><input type="button" name="Submit" value="Submit" class="s1"></td>
</tr>

</table>
</form>
</body>
</html>