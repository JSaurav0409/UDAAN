<html>
	<head>
		<title>
			Create New User Account
		</title>
		<style>
			
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
    			margin: 0px 135px
			}

            input[type=submit]:hover{
				background: green;
				box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 200px green;
			}

			a:hover{
				border-radius:4px;
				background: orange;
				box-shadow: 0 0 5px orange, 0 0 25px orange, 0 0 50px orange, 0 0 200px orange;
			}

			.bg_img p{
				font-size: 25px;

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
		UDAAN
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text"> Welcome to  UDAAN !
				<div class="bg_img">
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h3><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h3>
			<table cellpadding='5'>
				<u><p>ENTER LOGIN DETAILS</p></u>
				<tr>
					<td>Enter a valid username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
					<td><input type="text" name="username" placeholder="saurav123"required><br><br></td>
				</tr>
				<tr>
					<td>Enter your desired password:  </td>
					<td><input type="password" name="password" maxlength="20"placeholder="Password" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your email ID: </td>
					<td><input type="email" name="email" placeholder="mymail@gmail.com" required><br><br></td>
				</tr>
			</table>
			<table cellpadding='5'>
			<u><p>ENTER CUSTOMER'S PERSONAL DETAILS</p></u>
				<tr>
					<td>Enter your name:  </td>
					<td><input type="text" name="name" placeholder="Saurav Jha" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your phone no: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><input type="text" name="phone_no" maxlength="10" placeholder="123456789" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your address: </td>
					<td><input type="text" name="address" placeholder="Wolf Street"required><br><br></td>
				</tr>
		</table>
				<table cellpadding='5'>
				<u><p>ENTER CARD DETAILS </p></u>
				<tr>
					<td>Card No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><input type="text" name="Card_no" maxlength="16"placeholder="123456789"required><br><br></td>
				</tr>
				<tr>
					<td>CVV:</td>
					<td><input type="cnn" name="cvv" maxlength="3" placeholder="321" required><br><br></td>
				</tr>
				<td>Expiry Date:</td>
				<td><input type="text" name="expiry" placeholder="00/00" required><br><br></td>	
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
		</form>
		</div>
		</div>
		<img src="images/New-user.webp" width=100% height=152%  >
		</div>

<footer>
    <p> &copy;UDAAN2022<br></p>
</footer>
	</body>
</html>