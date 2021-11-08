<?php

$db = mysqli_connect("localhost","root","","helpdesk");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>