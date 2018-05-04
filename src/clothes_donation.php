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
			<?php include 'header.php';?>
	</div>
	<div id="body" style="background-color:rgb(253, 221, 153);">
		<div class="donation_div">
			<h3><?php echo $_GET["donate"]; ?> Donation</h3><hr>
			<form action="./insert_donation.php" method="post" class="user">
				
				<input type="hidden" name="cat" value="<?php echo $_POST['cat'];?>">	
				<label>Categories</label>
				<select name=cloth_category >
				<option value="">Select</option>
				<option value="Shirt">Shirt</option>
				<option value="Jeans">Jeans</option>
				<option value="T-Shirt">T-Shirt</option>
				<option value="Saree">Saree</option>
				<option value="Tops">Tops</option>
				</select>
				<label>Quantity</label><p style="color:black;font-size:14px;">( Pick up from home available only when quantity is greater than 5) </p>
				<select name=cloth_quantity >
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
				<label>Description</label>
				<textarea rows="4" cols="5" name="cloth_description"></textarea>
		<!--		<label>How we collect your donation? </label>
				<div class="pickup">
					<span><input type="radio" name="pickup" value="M">
					<label>I'll come to the organization</label><br></span>
					<span><input type="radio" name="pickup" value="A">
					<label>Pickup from home available only when the quantity is greater than 5</label></span>
				</div> -->
				<input type="submit" value="Donate" name="cloth_donate">
			</form>
		</div>
	</div>
				
	<?php	include("./includes/footer.html");	?>
</body>
</html>