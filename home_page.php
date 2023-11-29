<?php
	session_start();
?>
<html>
	<head>
<style>
     a:hover{
		    border-radius:4px;
			background: yellow;
			box-shadow: 0 0 5px yellow, 0 0 25px yellow, 0 0 50px yellow, 0 0 200px yellow;
			}
	
.imgSlider{
        width: 100%;
        height: 74.8%;
        background-image: url("images/Homescreen.jpg");
        background-size: 100% 100%;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        animation: changeImage 15s linear infinite;
}

@keyframes changeImage {
    0%{
        background-image: url("images/Homescreen.jpg");
    }
    25%{
        background-image: url("images/login-page.jpg");
    }
    50%{
        background-image: url("images/slider1.jpeg");
    }
    75%{
        background-image: url("images/slider2.jpeg");
    }
    100%{
        background-image: url("images/succesful-regis.jpg");
    }
    
    
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
		<title>
			Welcome to BusWay !
		</title>
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
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="about_us.php"><i class="fa fa-bus" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
		<div class="slideshow-middle">
			<div class="welcome_text" style="padding-left: 540px" >
				Welcome to BusWay !
			</div>
			<div class="imgSlider">

		</div>
		</div>
		
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
			</div>
			
<footer>
    <p> &copy;BusWay2023</p>
</footer>
			
	</body>
</html>