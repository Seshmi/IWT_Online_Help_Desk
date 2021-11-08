<?php

$connection=mysqli_connect('localhost','root','','helpdesk');

$rollno=$_GET['rn'];

$query = "DELETE  
          FROM library
          WHERE ID_no='$rollno'";

$result = mysqli_query($connection,$query);

if($result)
{
    echo"Record deleted";
}
else{
    echo"not Deleted";
}
?>