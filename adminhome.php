<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body bgcolor="pink">
	<div class="c">

	<header class="header">
		  <a href="adminhome.php" class="heading"> Admin Dashboard</a>
		<div class="logout">
			<a href="logout.php" class="btn btn-primary" style="background-color:#f2676a;"> Logout </a>
		</div>
	</header>
	<div>
		<ul>
			<div class="row1">
			<li>
				<div class="hrefclass"> <img src="add.png" class="img"> <a href="insert.php" class="ahref"> Adding Student </a></div>
			</li>
			<li>
				<div class="hrefclass"><img src="view.png" class="img"><a href="display.php" class="ahref"> Viewing student </a></div>
			</div>


			<div class="row2">
			</li>
			<li>
				<div class="hrefclass"><img src="update.png" class="img"><a href="update.php" class="ahref"> Update Student </a></div>
			</li>

			<li>
				<div class="hrefclass"><img src="delete.png" class="img"><a href="delete.php" class="ahref"> Remove Student </a></div>
			</li>
		</div>


		</ul>
	</div>
	</div> 


</body>
</html>