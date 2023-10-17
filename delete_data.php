
<?php 

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "student";
$data = mysqli_connect($host,$user,$pass,$db);

if($_GET['name'])
{
	$name = $_GET['name'];
	$sql = "DELETE FROM sdetails where Name='$name'";
	$result = mysqli_query($data,$sql);
	if($result)
	{	
		$_SESSION['message'] = 'Deleting the student is successful';
		header("location:delete.php");
	}
}




?>