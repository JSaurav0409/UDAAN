<?php
    session_start()
    ?>
<html>
    <head>
        <title>About Us</title>
<style>


.logo {
    float: left;
    object-fit: cover;
    width: 55px;
    padding: 10px;
}

a:hover{
    border-radius:4px;
    background: orange;
	box-shadow: 0 0 5px orange, 0 0 25px orange, 0 0 50px orange, 0 0 200px orange;
			}

.abt-us p {
    font-weight:bold;
    color : white;
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
                <div class="abt-us">
                    <p>
           This website is developed by Saurav Jha as college project in final year. 
           <br>
           <br>
           <u><strong>Features:-</strong></u> 
           <br>
           <br>
           For Customer:- <br>
           * Create an account <br>
* Search for available flights for a particular city-pair <br>
* Book tickets in the class of their choice <br>
* Cancel booked tickets <br>
* View booked tickets history. <br>
<br>
<br>
           For Admin :- <br>
           * Add/Modify flight schedules <br> 
* Viewing the booked ticket statistics <br>

        </p>
    </div>
            </div>
			<img src="images/Homescreen.jpg" width=100% height=74.80%  >
		</div>

<footer>
    <p> &copy;UDAAN2022<br></p>
</footer>
    </body>
</html>


