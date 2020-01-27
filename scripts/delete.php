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

    //Delete records from the database
    $sql = "DELETE FROM users2 WHERE userID='$_GET[userID]'";

    //return in array
    if(mysqli_query($connect, $sql)) {
        echo "Deleted!";
        header ("refresh:5; url=updateform.php");
    } else  {
        echo "Could not delete.";
    }

?>