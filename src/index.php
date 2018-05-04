<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/goonj.jpg" />
	<title> Goonj </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
			<?php include 'header.php';?>
	</div>
	<div id="body" style="background-color:rgb(253, 221, 153);">
		<div class="header">
			<div>
				<img src="images/people.jpg" alt="Image">
				<div id="tagline">
					<h1>Help Pepole</h1>
					<h3>We are working here always for helping Pepole.</h3>
				</div>
				<div class="section">
					<h2>Organizing seminars, impact studies, workshops, research study and awareness campaign on educational policies, statistics, health, legal issues, women and children developmental activities.</h2>
					<p>
						We Encouraging sustainable agricultural development and organic farming, Establishing unity, integrity and communal harmony, Encouraging adult education among rural masses and slum dwellers, Working for persons with disability.
					</p>
					<a href="about.php" class="first">Learn More About Us</a>
					<a href="login.php">Join Us</a>
				</div>
			</div>
		</div>
		<div class="body" >

			<div>
				<div class="figure">
					<img src="images/help.png" alt="Image"></a>
				</div>
				
				<div class="help" align="justify">
					<h2>How To Help</h2>
					<a href="login.php"><img src="images/finger.jpg" alt="Image"></a>
					<h3><a href="login.php">on your single step</a></h3>
					<p>
						stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
					</p>
					<span class="link"><a href="login.php">Get Involved</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>