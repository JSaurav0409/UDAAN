<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: brown;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 68px
			}

			input[type=submit]:hover{
				background: red;
				box-shadow: 0 0 5px red, 0 0 25px red, 0 0 50px red, 0 0 200px red;
			}

			a:hover{
				border-radius:4px;
				background: orange;
				box-shadow: 0 0 5px orange, 0 0 25px orange, 0 0 50px orange, 0 0 200px orange;
			}
    
			h2{
				color:navy
			}

			.fix_table{
				color: black;
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
				<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text">
				<div class="cancel_ticket">
		<form action="cancel_booked_tickets_form_handler.php" method="post">
			<h2>CANCEL BOOKED TICKETS</h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5" style="padding-left: 30px;">
				<tr>
					<td class="fix_table">Enter the PNR</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="pnr" required></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
			PREDEFINED LOCATION WHEN BOOKING TICKETS
		-->
			</div>
			</div>
			<img src="images/book_ticket.jpeg" width="100%" height="74.80%">
			<footer>
        <p> &copy;UDAAN2022<br></p>
    </footer>

	</body>
</html>