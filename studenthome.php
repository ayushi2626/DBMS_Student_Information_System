
<?php 
error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "student";
$data = mysqli_connect($host,$user,$pass,$db);
$uname = $_SESSION['uname'];
$sql = "SELECT * FROM sdetails where username='$uname'";

$result = mysqli_query($data,$sql);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
	<link rel="stylesheet" type="text/css" href="display.css">
</head>
<body bgcolor=#f7fbfc>
<header class="header">
		  <a href="" class="heading">  Student Dashboard</a>
		<div class="logout">
			<a href="logout.php" class="button2"> Logout </a>
		</div>
	</header>
	 
	<table>
		
		<tr> 
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a ;"> 
			Name </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Age </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Branch </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> DOB </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Batch </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Phone No</th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Email </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Parent Name </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Parent's No </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Username </th>
			<th style="padding : 18px;font-size:15px;font-family: candara;background-color:#f2676a;"> Password </th>
			 
		</tr>
		<?php

		while($info=$result->fetch_assoc())
		{


		?>
		<tr>
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
		</tr>
		<?php 
		}
		?>

	</table>
</div>


</body>
</html>