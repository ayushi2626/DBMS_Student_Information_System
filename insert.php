<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
	$message = $_SESSION['message'];

	echo "<script type='text/javascript'>
	alert('$message')
	</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert entry</title>
	<link rel="stylesheet" type="text/css" href="style_2.css">
	
	 
</head>
<body bgcolor=#f7fbfc style="margin:0px;padding:0px;">
	<header class="header" style="display: flex;">
		 <p style="font-family: candara;font-size:18px;color:white;"><a href="adminhome.php">Admin Dashboard</a></p>
		<div class="logout">
			<a href="logout.php" class="button2" style="text-decoration: none;margin-left:1200px;"> Logout </a>
		</div>
	</header>
	<div style="display: flex;">
	<div style="margin-top:140px;margin-right:-70px;">
		<ul style="list-style: none;">
			<li style="background-color: #3bb4c1;width:70%;height:35px;font-family:candara;font-size:18px;color:#f7fbfc;padding:20px;margin-top:5px;margin-bottom:10px;margin-left:-35px;position:relative;" ><a href="delete.php" style="text-decoration: none;"><font color=#f7fbfc> Remove Student</a></li>
			<li style="background-color: #3bb4c1;width:70%;height:35px;font-family:candara;font-size:18px;color:#f7fbfc;padding:20px;margin-top:5px;margin-bottom:10px;margin-left:-35px;position:relative;" ><a href="display.php" style="text-decoration: none;"> <font color=#f7fbfc>View Student</a></li>
			<li style="background-color: #3bb4c1;width:70%;height:35px;font-family:candara;font-size:18px;color:#f7fbfc;padding:20px;margin-top:5px;margin-bottom:10px;margin-left:-35px;position:relative; "><a href="update.php" style="text-decoration: none;"><font color=#f7fbfc> Update Student</a></li>
		</ul>
	</div>
	<form action="data_insert.php" method="POST" class="form1">
		<div class="entrydata">
		<div>  <input type="text" name="username" class="textbox" placeholder="UserName"> </div>

		<div class="flex"> <input type="text" name="password" class="textbox" placeholder="Password"> 

		<div class="imgnew"><img src="info.png" height="20px" width="20px" align="right">
		<span class="text_hidden">
			Password should satisfy the following:<br>
		1. It must be 8 characters long<br>
		2. It must contain atleast one uppercase character<br>
	3. It must contain atleast one lowercase character<br>
4. It must contain atleast one number<br>
</span> </div>
<div > <input type="text" name="id" class="textbox" placeholder="ID"></div>
<div > <input type="text" name="Name" class="textbox" placeholder="Name"></div>
<div >  <input type="text" name="Age" class="textbox" placeholder="Age"></div>
<div > <input type="text" name="Branch" class="textbox" placeholder="Branch"></div>
<div >  </label><input type="text" name="DOB" class="textbox" placeholder="DOB"></div>
<div  >  <input type="text" name="Batch" class="textbox" placeholder="Batch"></div>
<div  >  <input type="text" name="PhoneNo" class="textbox" placeholder="Phone No"></div>
<div  >  <input type="text" name="Email" class="textbox" placeholder="Email"></div>
<div  >  <input type="text" name="Parentname" class="textbox" placeholder="Parent's Name"></div>
<div  > <input type="text" name="ParentNo" class="textbox" placeholder="Parent's No"></div>
</div>
		<div><input type="submit" name="apply" class="button"> </div>
	</div>
	</form></div>
</body>
</html>