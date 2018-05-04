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
	<div id="body" style="background-color:rgb(253, 221, 153);">>
		<div class="donation_div">
			<h3><?php echo $_GET["donate"]; ?> Donation</h3><hr>
			<form action="./insert_donation.php" method="post" class="user">
				<input type="hidden" name="cat" value="<?php echo $_GET['cat'];?>">
				<label>Categories</label>
				<select>
				<option value="">Select</option>
				<option value="Shirt">Shirt</option>
				<option value="Jeans">Jeans</option>
				<option value="T-Shirt">T-Shirt</option>
				<option value="Saree">Saree</option>
				<option value="Tops">Tops</option>
				</select>
				<label>Quantity</label>
				<select>
				<option value="">Select</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				</select>
				<label>description</label>
				<textarea name="donor_discription" rows="5">
				</textarea>
				<label>How we collect your donation? </label>
				<div class="pickup">
					<span><input type="radio" name="pickup" value="M">
					<label>I'll come to the organization</label><br></span>
					<span><input type="radio" name="pickup" value="A">
					<label>Pickup from home available only when the quantity is greater than 5</label></span>
				</div>
				<input type="submit" value="Donate">
			</form>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>