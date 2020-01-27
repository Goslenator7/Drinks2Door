<?php

//connect to the database
$server = 'localhost';
$database = '40089223';
$username = '40089223';
$password = 'kmtiPN+j';

$connect = mysqli_connect($server, $username,$password,$database);

//check connection
if(mysqli_connect_errno()) {
    die('Could not connect: '. mysqli_connect_error());
}

    //Take any new values entered into table and replace the ones already in the database
    //
    $sql = "UPDATE users2 SET firstName='$_POST[fname]',lastName='$_POST[lname]',email='$_POST[email1]', 
    address1='$_POST[address2]', postcode='$_POST[postcode1]', password1='$_POST[password1new]', password2='$_POST[password2new]'
    WHERE userID ='$_POST[userID2]'";

    //Give confirmation of update and transfer to homepage or error.
    //
    if (mysqli_query($connect, $sql)) {
        echo "Updated!";
        header("refresh:3; url=updateform.php");
    } else {
        echo "Not updated. <a href=../login.html> Login Page </a>";
    }
?>