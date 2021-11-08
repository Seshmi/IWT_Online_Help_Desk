<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "faq";


//The conection object
$con = mysqli_con ($servername, $username, $password, $db);
//check connection
    if($con->connect_error)
    {
        die("connection failed:" . $con->connect_error);
    }

    echo"Connected successfully";

?>