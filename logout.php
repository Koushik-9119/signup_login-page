<?php
session_start();
unset($_SESSION['USER_LOGIN']);
unset($_SESSION['USER_USERNAME']);
header('location:index.php');
die();
?>