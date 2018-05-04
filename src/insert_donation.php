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
<?php 
if($_POST['cloth_donate']){
    $cloth_category=$_POST['cloth_category'];
    $cloth_quantity=$_POST['cloth_quantity'];
    $cloth_description=$_POST['cloth_description'];
    if($cloth_quantity<5) $delivery="Manual";
    else $delivery="Automated";
    $user_id=$_SESSION['user_id'];
    $sql="SELECT name,address FROM user where user_id='$user_id'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $name= $row['name'];
    $address=$row['address'];
    
    $sql = "INSERT INTO cloth_donate (user_id, name, address, cloth_category, cloth_quantity, cloth_description, delivery)
VALUES ('$user_id', '$name', '$address', '$cloth_category', '$cloth_quantity', '$cloth_description', '$delivery')";

     mysqli_query($con, $sql);
}

if($_POST['book_donate']){
    $book_subject=$_POST['book_subject'];
    $book_language=$_POST['book_language'];
    $book_standard=$_POST['book_standard'];
    $book_name=$_POST['book_name'];
    $book_author=$_POST['book_author'];
    $user_id=$_SESSION['user_id'];
    $sql="SELECT name,address FROM user where user_id='$user_id'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $name= $row['name'];
    $address=$row['address'];
    
    $sql = "INSERT INTO book_donate (user_id, name, address, book_subject, book_language, book_standard, book_name, book_author)
VALUES ('$user_id','$name','$address','$book_subject','$book_language','$book_standard','$book_name','$book_author')";

     mysqli_query($con, $sql);
}

?>
<body>
	<div id="header">
		<?php include 'header.php';?>
	</div>
	<div id="body"  style="background-color:rgb(253, 221, 153);">
		<div class="donation_div">
		<h3>Successfull!</h3><hr>
		<br>
	    <h2>Do you want to?</h2>
    	    <div>
        	    <a href="./donate.php">Contribute</a>
        	    <a href="./logout.php">Logout</a>
    	    </div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>