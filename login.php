<?php
include 'includes/dbh.inc.php';
session_start();
$row = null;
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
            $data = "SELECT * FROM Users WHERE email = '$email';";
            $result = mysqli_query($conn , $data);
            if (mysqli_num_rows($result)) {
            $row = mysqli_fetch_assoc($result);
                if ($row['pass'] == $pass) {
                    $_SESSION['login'] = true;
                    $_MESSAGE = "Success";
                }
                else {
                $error = "wrong Password";
                }
            }else {
                $error = "user does not exist";
            }
    }
}
    if (isset($_SESSION['login'])) {
        $_SESSION['name'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header('Location: index.php');
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

        <div id="back-bt">
            <a href="../"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 13v10h-6v-6h-6v6h-6v-10h-3l12-12 12 12h-3zm-1-5.907v-5.093h-3v2.093l3 3z"/></svg> Home</a>
        </div>
                    
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