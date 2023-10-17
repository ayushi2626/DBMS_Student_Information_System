<?php 
error_reporting(0);
session_start();
$host = "localhost";
$user="root";
$password="";
$db = "student";

$data = mysqli_connect($host,$user,$password,$db,3306);

if($data===false)
{
	die("Connection Error");
}
	if($_SERVER["REQUEST_METHOD"]==="POST")
	{
		$name = $_POST['username'];
		$pass = $_POST['password'];

		$sql = "select * from sdetails where username='$name' && password='$pass'";

		$result = mysqli_query($data,$sql);
		if(mysqli_num_rows($result)===1)
		{
			$row = mysqli_fetch_array($result);
			if($row["username"]===$name && $row['password']===$pass && !empty($_POST["password"]) && strlen($_POST["password"]) ==8 
				&& preg_match("#[0-9]+#",$pass) && preg_match("#[a-z]+#",$pass) && preg_match("#[A-Z]+#",$pass) ){
				$_SESSION['uname'] = $name;
				header("location:studenthome.php");

			}
		}
		else 
		{
			echo "Wrong Password";
		}
	}

 ?>