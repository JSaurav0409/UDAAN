<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: navy;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
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
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text">
				<div class="admin_ticket">
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<h2>VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
			<div>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Flight No.</td>
					<td class="fix_table">Enter the Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
					<td class="fix_table"><input type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit" name="Submit">
			</div>
		</form>
		</div>
		</div>
		<img src="images/New-user.webp" width="100%" height="74.80%">
		</div>
		<footer>
        <p> &copy;UDAAN2022<br></p>
    </footer>

	</body>
</html>