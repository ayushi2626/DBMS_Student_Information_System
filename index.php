<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Attendance Portal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f7fbfc;">
	<div class ="c">
		 <div class="d">
		 	<div class="form1">
		 		<img src="teacher.png" class="image2">
			<form class="t_form" action="login_check_teacher.php" method="POST">
				<div><input type="text" name="username" class="textbox" placeholder="Username"></div>
				<div><input type="password" name="password" class="textbox" placeholder="Password"></div>

				<div class="sign">
				<div> <input type="submit" name="submit" value="Login" class="button" style="width:100px;height:40px;margin-left:40px;"></div>
				 </div>

			</form>
		 	</div>
		 	<div class="form2">
		 		<img src="student.png" class="image">
			<form class="s_form" action="login_check_student.php" method="POST">
				<div><input type="text" name="username" class="textbox" placeholder="Username"></div>
				<div><input type="password" name="password" class="textbox" placeholder="Password"></div>

				<div class ="sign">
				<div> <input type="submit" value="Login" name="submit" class="button" style="width:100px;height:40px;margin-left:40px;"></div>
			</div>

				 
			</form>
		 	</div>

 		</div>

	</div>

</body>
</html>