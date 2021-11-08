<?php

include "Admin dbConn.php"; 

$id = $_GET['id']; 

$del = mysqli_query($db,"delete from registration where id = '$id'"); 

if($del)
{
    mysqli_close($db); 
    header("location:Admin Register Details.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>