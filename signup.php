<?php
include "includes/dbh.inc.php";
$error = '';
$uname = '';
$email = '';
$pass = '';
$cpass = '';

$register_status = '';
if (isset($_POST['uname'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if(strlen($uname) < 6) {
        $error = "Username Must be atleast 6 Characters";
    } else if(strlen($uname) > 16) {
        $error = "Username Must be atmost 16 Characters Long";
    } else if (strpos($email, "@") <= 0) {
        $error = "Invalid Email Address";
    } else if (strlen($pass) < 8) {
        $error = "Password too short";
    } else if ($pass != $cpass) {
        $error = "Password do not Match";
    } else {
        $sql = "select * from users where `email` = '$email';";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0) {
            $error = "Email Already Registered !";
        } else {
            $sql = "insert into users (`email`, `username`, `password`) value('$email', '$uname', '$pass');";
            $query = mysqli_query($conn, $sql);
            if($query) {
                $register_status = "Succesfull";
            } else {
                $error = "Can't Register Right Now !!";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>

        <div class="container2">
            <div>
                <div class="wcimg1">
                <img src="img/scimg.jpg" alt="">
            </div>
            </div>
            <form id="form-signup" method="POST">
            <h2>Sign Up</h2>

                <div style="color:#fff;" id="error_box"><?php 
                if ($error != '') {
                    echo $error;
                }
                ?></div>
                <div style="color:#fff;" id="success_box"><?php 
                if ($register_status != '') {
                    echo $register_status;
                    echo "<br><a class=\"homebt\" href=\"index.html\">Home</a>";
                } else{
                    echo '
                    <input id="username" type="text" name="uname" value="'.$uname.'" placeholder="Username">
                    <input id="email" type="email" name="email" value="'.$email.'" placeholder="Email Address">
                    <input id="pass" type="password" name="pass" placeholder="Password">
                    <input id="cpass" type="password" name="cpass" placeholder="Confirm Password">
                    <button id="register-bt">Register</button>
                    ';
                }
                ?>
            </form>
        </div>

        <script src="res/script.signup.js"></script>
    </body>
</html>