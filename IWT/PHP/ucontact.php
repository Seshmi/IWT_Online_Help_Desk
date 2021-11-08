<?php

$name=$_POST{'name'};
$mail=$_POST{'mail'};
$phone=$_POST{'num'};
$mes=$_POST{'mess'};

$connection=mysqli_connect('localhost','root','','helpdesk');

$sql="INSERT INTO contact(ID,name,email,phone,message)
      value('','{$name}','{$mail}','{$phone}','{$mes}')";

$result=mysqli_query($connection,$sql);

if($result)
{
    header('Location:../HTML/contact_thank.html');
}
else
{
    echo"error";
}
?>