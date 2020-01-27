<?php
session_start();
require_once('connect.php');
ini_set('arg_seperator.output',',;');

//log in
$email="";
$password1="";

if (isset($_POST['login'])){
    //Set email variable to equal form email
    if (!empty($_POST['email'])){
        $email = $_POST['email'];
    }
    //set password variable to equal form password
    if (!empty($_POST['password1'])){
        $password1 = $_POST['password1'];
    }
}

$query = "select * from users2 where email = '$email' and password1='$password1'";
    $result = mysqli_query($connect, $query);
    if (!$result)
    {
        echo 'Error, please try again. <a href="../login.html">Login </a>';
        exit();
    }

    if(mysqli_num_rows($result)!=1)
    {
        echo 'Please try again. <a href="../login.html">Login </a>';
        exit();
    } else {
         $_SESSION['email'] = $_POST['email'];
         $row = mysqli_fetch_assoc($result);
         if (!$row)
         {
             echo "fetch failed";
             exit();
         }

         echo 'You are logged in as ' .$email. '. Click to go to <a href="../products.html"> products </a>.';
    }

//Check if provided variables are in the database
//if yes, set the session variables to these variables


/*if (mysqli_num_rows($result) > 0) {
    //$_SESSION['email'] = $email;
}

//authenticate user, set session variable to email (username)
if ($_POST['email'] == $email && $_POST['password1'] == $password1){
    $_SESSION['email'] = $_POST['email'];
  }

//Message if someone is logged in already
if (isset($_SESSION['email']) && !isset($_POST['logout'])) {
    echo 'You are logged in as ' .$email. '. Click to go to <a href="../products.html"> products </a>.';
//Message if login is attempted before registration
} else {
    echo ('Sorry, We could not find that account. Please try <a href="login.php"> again </a> or <a href="../account.html"> register </a> for an account');
}*/
?>