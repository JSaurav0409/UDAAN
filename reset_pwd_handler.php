<?php
  session_start()
?>

<html>
    <head>
        <title>Reset Password Handler</title>
    </head>
    <body>
        
<?php

include 'dbcon.php';
if(isset($_POST['submit'])){

    if(isset($_GET['token'])){

        $token = $_GET['token'];
    

    $newpassword = mysqli_real_escape_string($con, $_POST['password'])  ;
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;

    $pass = password_hash($newpassword, PASSWORD_BCRYPT) ;
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT) ;


        

        if($newpassword === $cpassword) {


            $updatequery = "update registration set password= '$pass' 
                where token='$token' ";

            $iquery = mysqli_query($con, $updatequery);
            if($iquery){

                $_GET['msg'] = " Your password has been updated. " ;
                header('location:login_page.php');

            }else{
                $_GET['passmsg'] = " Your password is not updated " ;
                header('location:reset_pwd.php') ;

            }
      
        }else{$_GET['passmsg'] = " Your password is not matching " ;

        }

    }
}

?>

    </body>
</html>

