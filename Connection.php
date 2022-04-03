<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="gym members";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $First_Name = $_POST['First_Name'];
	 $Last_Name = $_POST['Last_Name'];
	 $Email = $_POST['Email'];
	 $Mobile = $_POST['Mobile'];
     $Address = $_POST['Address'];

	 $sql_query = "INSERT INTO register_db (First_Name,Last_Name,Email,Mobile,Address)
	 VALUES ('$First_Name','$Last_Name','$Email','$Mobile','$Address')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include'successful.html';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>