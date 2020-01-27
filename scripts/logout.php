<?php

session_start();
require_once('connect.php');
ini_set('arg_seperator.output',',;');

// Log out
if (isset($_SESSION['email'])){
    unset($_SESSION['email']);
    session_destroy();

    //logout message
    echo 'You have been logged out. <a href="../index.php"> Home </a>';
} else {
    echo 'You have not logged in yet. <a href="../account.html"> Home </a>';
}
?>