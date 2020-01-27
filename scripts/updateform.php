<html>
    <head>
        <title>Update</title>
        <link href="style2.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h2> Update or Delete Users </h2>
<p><a href="../index.php">Home</a>
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

    //select all records from the database
    $sql = "SELECT * FROM users2";

    //return in array
    $records = mysqli_query($connect, $sql);
?>
<table>
    <tr>
        <th>firstName</th>
        <th>lastName</th>
        <th>email</th>
        <th>address1</th>
        <th>postcode</th>
        <th>password1</th>
        <th>password2</th>
</tr>

<?php

    while ($row = mysqli_fetch_array($records)) {
        //show all entries in the database as a table
        //set them to be transferred to update script (update.php) when submit is clicked.
        echo "<tr><form action='update.php' method=post>";
        echo "<td><input type=text name=fname value='".$row['firstName']."'></td>";
        echo "<td><input type=text name=lname value='".$row['lastName']."'></td>";
        echo "<td><input type=text name=email1 value='".$row['email']."'></td>";
        echo "<td><input type=text name=address2 value='".$row['address1']."'></td>";
        echo "<td><input type=text name=postcode1 value='".$row['postcode']."'></td>";
        echo "<td><input type=text name=password1new value='".$row['password1']."'></td>";
        echo "<td><input type=text name=password2new value='".$row['password2']."'></td>";
        echo "<input type=hidden name=userID2 value='".$row['userID']."'>";
        echo "<td><input type=Submit>";
        echo "<td><a href=delete.php?userID=$row[userID]>Delete</a></td>";
        echo "</form></tr>";

    }


?>

</body>
</html>