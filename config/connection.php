<!-----connection to database--->
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="srs_mvc";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("connection failed:" . $conn->connect_error);
}
//echo "connected successfully";
?>