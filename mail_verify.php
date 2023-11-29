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
				 border:2px solid black;
				 padding:30px 20px;
			 }


			input {
    			border: 2px solid #030337;
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

			.bg_img a{
				color: orange;
			}

			input[type=submit]:hover{
				background: green;
				box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 200px green;
			}

			footer {
            padding: 3px;
    background-color: #232F3E  ;
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
			UDAAN
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
			<div class="welcome_text">
				<div class="bg_img">
		<form class="float_form" style="padding-left: 540px" action="login_handler.php" method="POST">
		<br>
			<fieldset>
				<legend>Login Details:-</legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>E-mail:</strong><br>
				<input type="text" name="email" placeholder="Enter your mail" required><br><br>
				<br>
				<input type="submit" name="Login" value="Submit">
				<br>
			
			</fieldset>  
		</form>
			</div>
			</div>
			<img src="images/mail-verify.webp" width="50%" height="74.80%" >
				</div>
				

<footer>
    <p> &copy;UDAAN2022</p>
</footer>
	</body>
</html>