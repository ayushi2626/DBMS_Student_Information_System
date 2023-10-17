
<?php 
error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "student";
$data = mysqli_connect($host,$user,$pass,$db);

$sql = "SELECT * FROM sdetails";

$result = mysqli_query($data,$sql);
if($_SESSION['message'])
{
	$message = $_SESSION['message'];

	echo "<script type='text/javascript'>
	alert('$message')
	</script>";
}
session_destroy();

 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="display.css">

</head>
<body bgcolor= #f7fbfc>
	
<header class="header">
		   <a href="adminhome.php"> Admin Dashboard</a>
		<div class="logout">
			<a href="logout.php" class="button2"> Logout </a>
		</div>
	</header>
	<div style="display:flex;">
	<div style="margin-top:140px;margin-right:-70px;height:180px;">
		<ul>
			<li style="background-color:#3bb4c1;width:50%;height:35px;font-family:candara;font-size:14px;padding:20px;margin-top:5px;margin-bottom:10px;" ><a href="display.php" style="text-decoration: none;"><font color=#f7fbfc> View Student</font></a></li>
			<li style="background-color: #3bb4c1;width:50%;height:35px;font-family:candara;font-size:14px;padding:20px;margin-top:5px;margin-bottom:10px; "><a href="delete
				.php" style="text-decoration: none;"> <font color=#f7fbfc>Remove Student</font></a></li>
				<li style="background-color: #3bb4c1;width:50%;height:35px;font-family:candara;font-size:14px;padding:20px;margin-top:5px;margin-bottom:10px; "><a href="insert.php" style="text-decoration: none;"> <font color=#f7fbfc>Add Student</font></a></li>
		</ul>
	</div>
	 
	<table>
		
		<tr> 
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a ;"> 
			Id </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a ;"> 
			Name </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Age </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Branch </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> DOB</th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Batch</th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;">Phone No </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Email </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Parent's Name </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Parent No </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Username </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Password </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color: #f2676a ;"> UPDATE </th>
			 
		</tr>
		<?php

		while($info=$result->fetch_assoc())
		{


		?>
		<tr>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['id']}";?> </td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Name']}";?> </td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Age']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Branch']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['DOB']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Batch']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Phone_no']}";?></td>
			 
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Email']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Parent_name']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['Parent_no']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['username']}";?></td>
			<td style="padding : 15px;font-size:15px;font-family: candara;"> <?php echo "{$info['password']}";?></td>
			<td style="padding : 28px;font-size:15px;font-family: candara;"> <?php echo "<a  onClick =\"javascript:return confirm('Are you sure you want to update the record');\" href='update_student.php?id={$info['id']}'  style='text-decoration:none;'> Update </a>";?></td>
			 
		</tr>
		<?php 
		}
		?>

	</table>
</div>
</body>
</html>