<?php
    session_start()
    ?>
<html>
    <head>
        <title>Mail Verify</title>
    </head>
    <body>
        <?php

        if(isset($_POST['submit'])){
        
            $email = mysqli_real_escape_string($con, $_POST['email'])  ;
        
            $emailquery = " select * from registration where email='$email'  " ;
            $query = mysqli_query($con,$emailquery);
        
            $emailcount = mysqli_num_row($query);
            
            if($emailcount){
        
                $userdata = mysqli_fetch_array($query);
        
                $name = $userdata['name'];
               
        
                $subject = "Password Recovery" ;
                $body = " Hi, $name. Click here to recover your account password
                htttp://localhost/airline-ticket-reservation/reset_pwd.php? ";
                $sender_mail = "From: www.sjha786@gmail.com";
        
                if(mail($email, $subject, $body, $sender_mail)) {
                    $_SESSION['msg'] = "Check your mail to recover your password $email";
                      header('location:login_page.php');            
                } else{
                    echo "Mail sending failed.. ";
                }   
                }
                else{
                    echo"No mail found";
                }
            }
        
        
         ?>
    </body>
</html>