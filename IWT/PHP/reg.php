<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$tel=$_POST['cno'];

$connect = mysqli_connect('localhost','root','','helpdesk');

$query= mysqli_query($connect, "SELECT * FROM uni_registration WHERE email= '$email'");
	if(mysqli_num_rows($query)>=1)
	{
        echo '<script type="text/javascript">alert("E-mail Already Use!!")</script>';
    }
    else
    {

$sql = "INSERT INTO uni_registration (name,pass,email,t_number)
            VALUE('{$name}','{$password}','{$email}','{$tel}')";

$result = mysqli_query($connect,$sql);

if($result == 1)
    {
    header("Location:../HTML/lec register page.html");
    }
    else
    {
    echo 'database fail';
    //$error = "Username of Password is Invalid";
    }
}
?>