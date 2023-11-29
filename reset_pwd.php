<?php
   session_start()
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PASSSWORD RESET</title>
       <style>

.container {
    position: absolute;
    width: 40%;
    margin: 0 auto;
    background-color: #f7f7f7;
    color: #757575;
    font-family: 'Raleway', sans-serif;
    text-align: left;
    padding: 7px 30px;
    }

h2 {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 10px;
}
a:hover{
				border-radius:4px;
				background: orange;
				box-shadow: 0 0 5px orange, 0 0 25px orange, 0 0 50px orange, 0 0 200px orange;
			}

.container p {
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 20px;
}

.change_pwd {
    position: absolute;
    border: 2px solid #030337;
    border-radius: 4px;
    padding: 7px 30px;
}

.change_pwd input[type="text"], .change_pwd input[type="email"], .change_pwd input[type="password"] {
    width: 94.5%;
    padding: 10px;
    margin: 10px 0;
    outline: none;
    color: #000;
    font-weight: 500;
    font-family: 'Roboto', sans-serif;
    border-radius: 4px;
}
.send-button {
    text-align: center;
    margin-top: 20px;
}
.send-button input[type="submit"] {
    padding: 10px 0;
    width: 60%;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 500;
    border-radius:4px;
    outline: none;
    color: #FFF;
    background-color: #030337;
    cursor: pointer;
}
.send-button input[type="submit"]:hover {
				background: green;
				box-shadow: 0 0 5px green, 0 0 25px green, 0 0 50px green, 0 0 200px green;
			}
a.logout{float: right;}
p.success{color:#34A853;}
p.error{color:#EA4335;}

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
				<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
    
    </div>

    <div class="container">
    <div class="change_pwd"> 
        <form action="userAccount.php"  method="post">
   <u> <h3><i class="fa fa-lock" aria-hidden="true"></i> Reset your Password</h3>  </u>
        <p> <?php 
        if(isset($_GET['passmsg']))  {
            echo $_GET['passmsg'];
            }else{
                echo $_GET['passmsg'] = "" ;

            }
             
            ?></p>
            <input type="password" name="newpassword" placeholder="New Password" required>

    <div class="confirm_pwd"> 
    <input type="password" name="cpassword" placeholder="Confirm Password" required>       
            <div class="send-button">
                <input type="hidden" name="fp_code" value="<?php echo $_REQUEST['fp_code']; ?>"/>
                <input type="submit" name="resetSubmit" value="Reset Password">
            </div>
            </div>
            <p class="text-center">Have an account ?<a href="login_page.php">Log In</a></p>
        </form>
    </div>
  </div>