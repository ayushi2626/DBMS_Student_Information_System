<?php

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "student";


$data = mysqli_connect($host,$user,$pass,$db);

if($data===false){
	die("Connection Error");
}

if(isset($_POST['apply']))
{	
	$id = $_POST['id'];
	$u_name = $_POST['username'];
	$pass = $_POST['password'];
	$name = $_POST['Name'];
	$age = $_POST['Age'];
	$branch = $_POST['Branch'];
	$dob = $_POST['DOB'];
	$batch = $_POST['Batch'];
	$p_no = $_POST['PhoneNo'];
	$email = $_POST['Email'];
	$parent_name = $_POST['Parentname'];
	$parent_no = $_POST['ParentNo'];



	if(strlen($_POST["password"])==8 && preg_match("#[0-9]+#",$pass) && preg_match("#[a-z]+#",$pass) && preg_match("#[A-Z]+#",$pass))
	{	
		$sql = "INSERT INTO sdetails VALUES ('$id','$name','$age','$branch','$dob','$batch','$p_no','$email','$parent_name','$parent_no','$u_name','$pass') ";
		$result = mysqli_query($data,$sql);
		if($result)
		{
			$_SESSION['message'] = "Student added";
			header("location:insert.php");
		}
		else
		{
			echo "Insertion Failed. Server Issues";
		}
	}
	else
	{
		$_SESSION['message'] = "Recheck password. Hover over image to know more";
		header("location:insert.php");
	}
}


?>