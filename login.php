<?php
include 'includes/dbh.inc.php';

$_MESSAGE = '';
$error = '';
$email = '';
$pass = '';

    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if (strlen($email) <= 0) {
            $error = "Invalid Email !";
        }elseif (strlen($pass) <= 0) {
            $error = "Enter Password !";
        }else {
            $result1 = "SELECT email , pass FROM Users WHERE email = '".$email."' AND pass = '".$pass."' ";
            $query = mysqli_query($conn , $result1);

            if (mysqli_num_rows($query) > 0) {
                $_MESSAGE = "Successfull";
            }else {
                $error = "Invalid Email password";
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
                    
        <div class="container">
            <div>
                <div class="wcimg">
                <img src="img/wcimg.jpg" alt="">
                </div>
            </div>
            <form method = "POST">
            <div id="error">          
            <?php
            if($error!= ''){
                echo $error;
            }
            ?></div>
            <div id="success">
                <?php
                if($_MESSAGE!= ''){
                    echo $_MESSAGE;
                }
                ?>
            </div>

                <input placeholder="Email" type="text" name="email" value="">
                <input placeholder="Password" type="password" name="pass" value="">
                <button name="login">Log In</button>
                <a href="#">Forgot Password?</a>
            </form>
            </div>
        </div>
    </body>
</html>