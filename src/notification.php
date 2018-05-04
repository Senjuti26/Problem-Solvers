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
    $user_id=$_SESSION['user_id'];
    $sql="SELECT * from cloth_donate where user_id='$user_id'";
    $cloth_result=mysqli_query($con,$sql);
   
    
    $sql="SELECT * from book_donate where user_id='$user_id'";
    $book_result=mysqli_query($con,$sql);

?>
<body>
	<div id="header">
		<?php include 'header.php';?>
	</div>
	<div id="body"  style="background-color:rgb(253, 221, 153);">
		<div class="donation_div">
		<h3>Manage Contributions </h3><hr>
		<br>
	    <h2>Clothes</h2>
    	    <div>
        	    <table>
        	        <?php while($cloth=mysqli_fetch_assoc($cloth_result)){
        	         ?>
        	            <tr>
        	                <td>Your Contribution of cloth made on <?php echo $cloth['date']; ?> is <?php echo $cloth['Status']; ?></td>
        	            </tr>
        	    <?php
        	        }
        	        ?>
        	        
        	    </table>
    	    </div>
    	<h2>Books</h2>
    	    <div>
        	    <table>
        	        <?php while($book=mysqli_fetch_assoc($book_result)){
        	         ?>
        	            <tr>
        	                <tr>
        	                <td>Your Contribution of book made on <?php echo $book['date']; ?> is <?php echo $book['Status']; ?></td>
        	            </tr>
        	            </tr>
        	    <?php
        	        }
        	        ?>
        	        
        	    </table>
    	    </div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>