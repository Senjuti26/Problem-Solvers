<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>

	<title>Goonj</title>
	 <style >
  	.err
  	{
  		display:none;
  		color:red;
  	}
  </style>
	<link rel="shortcut icon" type="image/x-icon" href="images/goonj.jpg" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script type="text/javascript">
		
   function valid()
   {
   	var count=0;
   	 var email=document.getElementById('email').value;
   	  var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    if(email=="")
    {
      document.getElementById("eemail").style.display="block";
        document.getElementById("eemail").innerHTML="Enter email value";
      count++;
    }
    else if(atpos<=1 || atpos+2>=dotpos || dotpos+2>email.length-1)
    {
     document.getElementById("eemail").style.display="block";
     document.getElementById("eemail").innerHTML="Enter correct value";
      count++;
    }
    else
    {
      document.getElementById("eemail").style.display="none";
    }
     var pass=document.getElementById("pass").value;
     if(pass=="")
     {
       document.getElementById("err_pass").style.display="block";
        document.getElementById("err_pass").innerHTML="Enter password value";
        count++;
     }
     else if(pass.length<8)
     {
     	document.getElementById("err_pass").style.display="block";
        document.getElementById("err_pass").innerHTML="Enter atleast of length 8  value";
        count++;
     }
     else if(pass.search(/[A-Z]/)==-1)
     {
     	document.getElementById("err_pass").style.display="block";
        document.getElementById("err_pass").innerHTML="Enter atleast one uppercase  value";
        count++;
     }
     else if(pass.search(/[a-z]/)==-1)
     {
     	document.getElementById("err_pass").style.display="block";
        document.getElementById("err_pass").innerHTML="Enter atleast one LOWERcase  value";
        count++;
     }
     else if(pass.search(/[!\@\#\$\^\&\(\)]/)==-1)
     {
     	document.getElementById("err_pass").style.display="block";
        document.getElementById("err_pass").innerHTML="Enter atleast one special character";
        count++;
     }
     else
     {
      document.getElementById("err_pass").style.display="none";
     }
	 var name=document.getElementById('name').value;
    		//alert(name);
        var count=0;
    		if(name=="")
    		{
    			document.getElementById('ename').style.display="block";
    			document.getElementById('ename').innerHTML="Enter name";
    			count++;
    		}
			if(!isNaN(name))
            {
				document.getElementById('ename').style.display="block";
    			document.getElementById('ename').innerHTML="Please Enter Only Characters";
    			count++;
    		}
    		else
    		{
    			document.getElementById('ename').style.display="none";
                
    		}
			var address=document.getElementById('address').value;
				if(address=="")
    		{
    			document.getElementById('eadd').style.display="block";
    			document.getElementById('eadd').innerHTML="Enter address";
    			count++;
    		}
    		else
    		{
    			document.getElementById('eadd').style.display="none";
                
    		}
			 var phno=document.getElementById('phno').value;
       
        if(phno=="")
        {
          document.getElementById('ephno').style.display="block";
          document.getElementById('ephno').innerHTML="Enter phone no";
          count++;
        }
        else if(isNaN(phno))
        {
          document.getElementById('ephno').style.display="block";
          document.getElementById('ephno').innerHTML="Enter numeric value";
          count++;
        }
        else if(phno.length<10|| phno.length>10)
       { 
      
            document.getElementById('ephno').style.display="block";
          document.getElementById('ephno').innerHTML="Enter 10 digit no";
          count++;
        }
        else
        {
          document.getElementById('ephno').style.display="none";
        }
		 var mt=document.getElementById('mt').value;
         if(mt=="")
         {
          document.getElementById('emt').style.display="block";
          document.getElementById('emt').innerHTML="select state";
          count++;
         }
         else
         {
          document.getElementById('emt').style.display="none";
         }
		  var tt=document.getElementById('tt').value;
		   if(tt=="")
         {
          document.getElementById('ett').style.display="block";
          document.getElementById('ett').innerHTML="select city";
          count++;
         }
         else
         {
          document.getElementById('ett').style.display="none";
         }
    if(count==0)
    {
    	return true;
    }
    else
    {
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
						<input type="email" name="email" id="email1" placeholder="Enter your Email address">
						
						<label>Password</label>
						<input type="password" name="pass" id="pass1"  placeholder="Enter your password">
						
						<input type="submit" name="submit" value="Login">
					</form>
				</div>
				<div class="register_div">
					<h3>Register</h3>
					<form action="./registration.php" method="post" onsubmit="return valid()" class="user">
						<label>Enter Name</label>
						<input type="text" id="name" name="name" placeholder="Enter your name">
						<span id="ename" class="err"></span><br>
						<label>Address</label>
						<input type="text" id="address" name="address" placeholder="Enter your address">
						<span id="eadd" class="err"></span><br>
						<label>Phone No</label>
						<input type="text" id="phno" name="phno" placeholder="Enter your Phone no">
						<span id="ephno" class="err"></span><br>
						<label>State</label>
						<select name="state" id="mt">
						 <option value="">select</option>
                         <option value="West Bengal">West Bengal</option>
						</select>
						  <span id="emt" class="err"> </span><br>
						<label>City</label>
						<select  name="city" id="tt">
						  <option value="">select</option>
                          <option value="Kolkata">Kolkata</option>
						
						</select>
						  <span id="ett" class="err"> </span><br>
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