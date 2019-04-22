<?php
session_start();
if ($_SESSION['login']) {
    unset($_SESSION['login']);
    unset($_SESSION['name']);
}
session_destroy();
header('Location: index.php');
?>