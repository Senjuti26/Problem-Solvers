<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>

	<title>Goonj</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="images/goonj.jpg" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script type="text/javascript">
		function checkPassword(){
			if(document.getElementById("password").value == document.getElementById("password1").value){
				return true;
			}
			else{
				document.getElementById("password").style.border="2px solid #ff3300";
				document.getElementById("password1").style.border="2px solid #ff3300";
				return false;
			}
		}
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/goonj.jpg" height="120px" width="150px" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
					<li class="login"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="login"><a>Login</a></li>
				<?php
					}
				?>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" style="background-color:rgb(253, 221, 153);">
			<div>
				<div class="login_div">
					<h3>Login</h3>
					<form action="./login_check.php" method="post" class="user">
						<label>Email Address</label>
						<input type="email" name="email" required>
						<label>Password</label>
						<input type="password" name="password" required>
						<input type="submit" value="Login">
					</form>
				</div>
				<div class="register_div">
					<h3>Register</h3>
                		<form action="./registration.php" method="post" onsubmit="return valid()" class="user">
                						<label>Enter Name</label>
                						<input type="text" name="name" placeholder="Enter your name" required>
                						<label>Address</label>
                						<input type="text" name="address" placeholder="Enter your address" required>
                						<label>Phone No</label>
                						<input type="text" name="phno" placeholder="Enter your Phone no" required>
                						<label>State</label>
                						<select name="state">
                                            <option value="">select</option>
                                            <option value="West Bengal">West            Bengal</option>
                                        </select>
                                        <br> 
                						<label>City</label>
                						 <select name="city">
                                            <option value="">select</option>
                                            <option value="Kolkata">Kolkata        </option>
                                        </select>
                                        <br> 
                                        <label>Email Address</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your Email address">
                						 <span id="eemail" class="err"></span><br>
                                        <label>Password</label>
                                         <input type="text" id="pass" name="pas" placeholder="Enter your password" >
                                          <span id="err_pass"  class="err"></span> <br>					
                                        <input type="submit" id="submit"  value="submit">
                                       </form>
				</div>
			</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>