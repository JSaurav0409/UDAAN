<?php
	session_start();
?>
<html>
	<head>
		<title>
			Account Login
		</title>
		<style>
			 
			 fieldset{
				 font-size: 20px;
				 border: 2px solid white;
			 }


			input {
    			border: 2px solid black;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color:  #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}

			a:hover{
				border-radius:4px;
				background: orange;
				box-shadow: 0 0 5px orange, 0 0 25px orange, 0 0 50px orange, 0 0 200px orange;
			}

			input[type=submit]:hover{
				background: green;
				box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 200px green;
			}

			.bg_img a{
				color: orange;
			}


	footer {
        padding: 3px;
        background-color: #232F3E;
        color: white;
}

    footer p {
	text-align: center;
}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			BusWay
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-bus" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text"  style="padding-left: 540px"> Welcome to  BusWay !
				<div class="bg_img">
					<br>
		<form class="float_form" style="padding-left: 0px" action="login_handler.php" method="POST">
			<fieldset>
				<legend><u>Login Details</u></legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>User Type:</strong><br>
				Customer <input type='radio' name='user_type' value='Customer' checked/> Admin <input type='radio' name='user_type' value='Administrator'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<br>
				<input type="submit" name="Login" value="Login">
				<br>
				<a href="mail_verify.php"><i class="fa fa-undo fa-stack" aria-hidden="true"></i>Forget Password ?</a>
			    <br>
			     <a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account</a>
			
			
			</fieldset>  
		</form>
			</div>
			</div>
			<img src="images/login-page.jpg" width="100%" height="74.80%" >
				</div>
				

<footer>
    <p> &copy;BusWay2023<br></p>
</footer>
	</body>
</html>