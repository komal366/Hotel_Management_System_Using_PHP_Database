
	
<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$host="localhost";
	$user="root";
	$pass="";
	$dbname="project";

	$conn=mysqli_connect($host,$user,$pass,$dbname);
	$sql="INSERT INTO contact(name,email,message) values('$name','$email','$message')";
	mysqli_query($conn,$sql);

	echo "<h1>Contact Register Successfully</h1>";

}

?>


	
