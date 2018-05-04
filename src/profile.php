<?php	
include("./includes/connection.php");
session_start();
	$id=$_SESSION['user_id'];
$sql = "SELECT * FROM user WHERE user_id='$id'";		
$qer = mysqli_query($con,$sql);	
   $res = mysqli_fetch_assoc($qer);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/goonj.jpg" />
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
			<?php include 'header.php';?>
	</div>
	<br><br>
	<div id="body" style="background-color:rgb(253, 221, 153);">
<table border="3" height="400" width="300" cellspacing="10" cellpadding="10" align="center">
	<tr>
		<td>Name</td>
		<td><?php echo $res['name']; ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><?php echo $res['address']; ?></td>
	</tr>
	<tr>
		<td>Phone No</td>
		<td><?php echo $res['phno']; ?></td>
	</tr>
	<tr>
		<td>State</td>
		<td><?php echo $res['state']; ?></td>
	</tr>
	<tr>
		<td>City</td>
		<td><?php echo $res['city']; ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo $res['email']; ?></td>
	</tr>
	
</table><br><br>
    </div>

	<?php include("./includes/footer.html");	
	?>
</body>
</html>