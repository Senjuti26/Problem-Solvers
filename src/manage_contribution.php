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
    $sql="SELECT * from cloth_donate";
    $cloth_result=mysqli_query($con,$sql);
   
    
    $sql="SELECT * from book_donate";
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
        	        <tr>
        	            <th>Name</th>
        	            <th>Address</th>
        	            <th>Cloth Category</th>
        	            <th>Cloth Quantity</th>
        	            <th>Cloth Description</th>
        	            <th>Date</th>
        	            <th>Status</th>
        	        </tr>
        	        <?php while($cloth=mysqli_fetch_assoc($cloth_result)){
        	         ?>
        	            <tr>
        	                <td><?php echo $cloth['name']; ?></td>
                            <td><?php echo $cloth['address']; ?></td>
                            <td><?php echo $cloth['cloth_category']; ?></td>
                            <td><?php echo $cloth['cloth_quantity']; ?></td>
                            <td><?php echo $cloth['cloth_description']; ?></td>
                            <td><?php echo $cloth['date']; ?></td>
                            <td><?php echo $cloth['Status']; ?></td>
                            <form action="statuschange.php" method=post>
                                <td><select name=Status><option value="Accepted">Accept</option><option vvalue="Rejected">Reject</option></select>
                                </td>
                                <input name="cloth_id" type=hidden value="<?php echo $cloth['id']; ?>" >
                                <td><input type="submit" value="Submit" name="cloth_status"></td>
                            </form>
        	            </tr>
        	    <?php
        	        }
        	        ?>
        	        
        	    </table>
    	    </div>
    	<h2>Books</h2>
    	    <div>
        	    <table>
        	        <tr>
        	            <th>Name</th>
        	            <th>Address</th>
        	            <th>Subject</th>
        	            <th>Language</th>
        	            <th>Standard</th>
        	            <th>Book Name</th>
        	            <th>Author</th>
        	            <th>Date</th>
        	            <th>Status</th>
        	        </tr>
        	        <?php while($book=mysqli_fetch_assoc($book_result)){
        	         ?>
        	            <tr>
        	                <td><?php echo $book['name']; ?></td>
                            <td><?php echo $book['address']; ?></td>
                            <td><?php echo $book['book_subject']; ?></td>
                            <td><?php echo $book['book_language']; ?></td>
                            <td><?php echo $book['book_standard']; ?></td>
                            <td><?php echo $book['book_name']; ?></td>
                            <td><?php echo $book['book_author']; ?></td>
                            <td><?php echo $book['date']; ?></td>
                            <td><?php echo $book['Status']; ?></td>
                            <form action="statuschange.php" method=post>
                                <td><select name=Status><option value="Accepted">Accept</option><option vvalue="Rejected">Reject</option></select>
                                </td>
                                <input name="cloth_id" type=hidden value="<?php echo $book['id']; ?>" >
                                <td><input type="submit" value="Submit" name="book_status"></td>
                            </form>
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