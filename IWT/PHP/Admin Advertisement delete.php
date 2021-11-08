<?php

include "Admin dbConn.php"; 

$id = $_GET['id']; 

$del = mysqli_query($db,"delete from advertisement where id = '$id'"); 

if($del)
{
    mysqli_close($db); 
    header("location:Admin Advertisement.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>