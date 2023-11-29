<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Flight Schedule Details
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
    			margin: 0px 200px
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
			<div class="welcome_text"> Welcome to  UDAAN !
				<div class="add_flight">
		<form action="add_flight_details_form_handler.php" method="post">
			<h2>ENTER THE FLIGHT SCHEDULE DETAILS</h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Flight Number</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="flight_no" required></td>
				</tr>
			</table>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Origin</td>
					<td class="fix_table">Destination</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="origin" required></td>
					<td class="fix_table"><input type="text" name="destination" required></td>
				</tr>
			</table>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Date</td>
					<td class="fix_table">Arrival Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" required></td>
					<td class="fix_table"><input type="date" name="arr_date" required></td>
				</tr>
			</table>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Departure Time</td>
					<td class="fix_table">Arrival Time</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="time" name="dep_time" required></td>
					<td class="fix_table"><input type="time" name="arr_time" required></td>
				</tr>
			</table>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Number of Seats in Economy Class</td>
					<td class="fix_table">Number of Seats in Business Class</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" name="seats_eco" required></td>
					<td class="fix_table"><input type="number"" name="seats_bus" required></td>
				</tr>
			</table>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Ticket Price(Economy Class)</td>
					<td class="fix_table">Ticket Price(Business Class)</td>
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">
						<input type="number" name="price_eco" required>
					</td>
					<td class="fix_table">
						<input type="number" name="price_bus" required>
					</td>
				</tr>
			</table>
			<hr>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="text" name="jet_id" required>
					</td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
		</form>
		<!--check out addling local host in links and other places

		-->
			</div>
			</div>
			<img src="images/New-user.webp" width="100%" height="160%">
			</div>
	</body>
	<footer>
        <p> &copy;UDAAN2022<br></p>
    </footer>

</html>