<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/goonj.jpg" />
	<title>Donation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script src="./js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#donor_state").change(function(){
				var state = $("#donor_state").val();
				$("#donor_city").load("getCity.php?state="+state);
			});
		});
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/goonj.jpg"  height="120px" width="150px" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="current"><a>Donate</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div id="body" style="background-color:rgb(253, 221, 153);">
		<div class="donation_div">
			<h3><?php echo $_GET["donate"]; ?> Donation</h3><hr>
			<form action="./insert_donation.php" method="post" class="user">
				
				<input type="hidden" name="cat" value="<?php echo $_POST['cat'];?>">	
				<label>Subject</label>
				<select>
				<option value="">Select Subject</option>
				<option value="Shirt">Literature</option>
				<option value="Jeans">Grammar</option>
				<option value="T-Shirt">Science</option>
				<option value="Saree">History</option>
				<option value="Tops">Geography</option>
				<option value="Tops">Others</option>
				</select>
				<label>Language</label>
				<select>
				<option value="">Select Language</option>
				<option value="Shirt">English</option>
				<option value="Jeans">Bengali</option>
				<option value="T-Shirt">Hindi</option>
				
				</select>
				
				<label>Name of the Book</label>
				<input ></input>
				<label>Name of the Author</label>
				<input ></input>
				
				
				<br>
				<input type="submit" value="Donate">
			</form>
		</div>
	</div>
				
	<?php	include("./includes/footer.html");	?>
</body>
</html>