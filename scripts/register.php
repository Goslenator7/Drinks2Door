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

$firstName = "";
$lastName = "";
$email = "";
$address1 = "";
$password1 = "";
$password2 = "";

if (!empty($_POST['firstName'])) {
    $firstName = $_POST['firstName'];
}

if (!empty($_POST['lastName'])) {
    $lastName = $_POST['lastName'];
}

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
}

if (!empty($_POST['address1'])) {
    $address1 = $_POST['address1'];
}

if (!empty($_POST['postcode'])) {
    $postcode = $_POST['postcode'];
}

if (!empty($_POST['password1'])) {
    $password1 = $_POST['password1'];
}

if (!empty($_POST['password2'])) {
    $password2 = $_POST['password2'];
}

$query = "INSERT INTO users2 (firstName, lastName, email, address1, postcode, password1, password2) VALUES ('$firstName','$lastName','$email', '$address1', '$postcode', '$password1', '$password2')";
if (!mysqli_query($connect, $query)) die ('Insert did not work: ' .mysqli_error($connect));


if (isset($_POST['register'])) {
header("Location: ../login.html");
}

mysqli_close($connect);

?>



