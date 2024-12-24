	
<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$arrivaldate=$_POST['arrivaldate'];
	$departuredate=$_POST['departuredate'];
	$adults=$_POST['adults'];
	$kids=$_POST['kids'];
	$roomno=$_POST['roomno'];
	$roomtype=$_POST['roomtype'];
	$message=$_POST['message'];

	$host="localhost";
	$user="root";
	$pass="";
	$dbname="website";

	$conn=mysqli_connect($host,$user,$pass,$dbname);

	$sql="INSERT INTO book(username,email,contact,address,arrivaldate,departuredate,adults,kids,roomno,roomtype,message) 
	values('$username','$email','$contact','$address','$arrivaldate','$departuredate','$adults','$kids','$roomno','$roomtype','$message')";

	mysqli_query($conn,$sql);

	echo "<h1> Registeration Successfully</h1>";

}

?>


	
