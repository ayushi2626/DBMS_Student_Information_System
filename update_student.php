<?php 
error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "student";
$data = mysqli_connect($host,$user,$pass,$db);

$id = $_GET['id'];
$sql = "SELECT * FROM sdetails WHERE id='$id'";
$result = mysqli_query($data,$sql);
$info = $result->fetch_assoc();
if(isset($_POST['update']))
{
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$username = $_POST['UserName'];
	$pass = $_POST['Password'];
	$age = $_POST['Age'];
	$branch = $_POST['Branch'];
	$dob = $_POST['DOB'];
	$batch = $_POST['Batch'];
	$p_no = $_POST['phone_no'];
	$parent_no = $_POST['parent_no'];
	$p_name = $_POST['parent_name'];

	$query = "UPDATE sdetails set Name='$name',Age='$age',Branch='$branch',DOB='$dob',Batch='$batch',Phone_no='$p_no',Email='$email',Parent_name='$p_name',Parent_no='$parent_no',password='$pass',username='$username' where id = '$id'";
	$result2 = mysqli_query($data,$query);
	if($result2)
	{
		$_SESSION['message'] = "Updated the details";
		header("location:update.php");
	}

}
 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Student</title>
	<link rel="stylesheet" type="text/css" href="display.css">
</head>
<body bgcolor= #f7fbfc>
	
<header class="header">
		  <a href="adminhome.php" class="heading"> Admin Dashboard</a>
		<div class="logout">
			<a href="logout.php" class="button2"> Logout </a>
		</div>
	</header>
	<div style="display:flex;">
	<div style="margin-top:140px;margin-right:-70px;height:180px;">
		<ul>
			<li style="background-color:#3bb4c1;width:90%;height:35px;font-family:candara;font-size:18px;padding:20px;margin-top:5px;margin-bottom:10px;" ><a href="display.php" style="text-decoration: none;"><font color=#f7fbfc> View Student</font></a></li>
			<li style="background-color: #3bb4c1;width:90%;height:35px;font-family:candara;font-size:18px;padding:20px;margin-top:5px;margin-bottom:10px; "><a href="update
				.php" style="text-decoration: none;"> <font color=#f7fbfc>Update Student</font></a></li>
				<li style="background-color: #3bb4c1;width:90%;height:35px;font-family:candara;font-size:18px;padding:20px;margin-top:5px;margin-bottom:10px; "><a href="insert.php" style="text-decoration: none;"> <font color=#f7fbfc>Add Student</font></a></li>
		</ul>
	</div>
	 

	 <div style="margin-left: 370px;padding:20px;background-color: #3bb4c1; margin-top:25px;border-radius: 15px;">
	 	<form action="#" method="POST">
	 		<div style="display:flex;display-direction:column;">
	 		<div style="display: flex;flex-direction: column;">

	 		<div style="padding:10px;"> <input type="text" name="UserName" value="<?php echo "{$info['username']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray;"></div>
	 		<div style="padding:10px;"> <input type="text" name="Password" value="<?php echo "{$info['password']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray;"></div>
	 		<div style="padding:10px;"> <input type="text" name="Name" value="<?php echo "{$info['Name']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray;"></div>
	 		<div style="padding:10px;"> <input type="text" name="Age" value="<?php echo "{$info['Age']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray;"></div>
	 		<div style="padding:10px;"> <input type="text" name="Branch" value="<?php echo "{$info['Branch']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray;"></div>
	 		<div style="padding:10px;"> <input type="text" name="DOB" value="<?php echo "{$info['DOB']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray;"></div>
	 	</div>

	 		<div style="display: flex;flex-direction: column;">
	 		<div style="padding:10px;"> <input type="text" name="Batch" value="<?php echo "{$info['Batch']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray"></div>
	 		<div style="padding:10px;"> <input type="text" name="phone_no" value="<?php echo "{$info['Phone_no']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray"></div>
	 		<div style="padding:10px;"> <input type="text" name="Email" value="<?php echo "{$info['Email']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray"></div>
	 		<div style="padding:10px;"> <input type="text" name="parent_name" value="<?php echo "{$info['Parent_name']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray"></div>
	 		<div style="padding:10px;"> <input type="text" name="parent_no" value="<?php echo "{$info['Parent_no']}";?>" style="height:50px;width:350px;font-family:candara;font-size:16px;text-align: center;border-radius: 10px;background-color:white ;border:1px solid #dbd8e3;color:gray"></div>
	 		 <div style="padding:10px;"> <input type="submit" name="update" value="Update" style="height:50px;width:350px;padding:10px;background-color:#f2676a;border:1px solid #f2676a;border-radius:5px; color:#f7fbfc;"></div>
	 		

	 		</div>

	 	</div>
	 	
	 	
	 	</form>
	 </div>
	 
</body>
</html>