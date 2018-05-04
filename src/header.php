<div>
			<a href="index.php" id="logo"><img src="images/goonj.jpg"  height="120px" width="150px" alt="logo"></a>
			<ul> 
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="donate.php" >Donate</a></li>
				<li><a href="notification.php" >Notification</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="profile.php">profile</a></li>
    					<?php 
    					    if($_SESSION["admin"]=='1'){
    				    ?>
    				        <li><a href="manage_contribution.php">Manage Contribution</a></li>
    			
    				    <?php 
    					}
    					?>
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