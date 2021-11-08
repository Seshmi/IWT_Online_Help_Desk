<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$unitype=$_POST['unitype'];
$uni=$_POST['uni'];
$unicourse=$_POST['unicourse'];

$connect = mysqli_connect('localhost','root','','helpdesk');

$query= mysqli_query($connect, "SELECT * FROM user_details WHERE email= '$email'");
	if(mysqli_num_rows($query)>0)
	{
        echo '<script type="text/javascript">alert("E-mail Already Use!!")</script>';
        
    }
    else
    {

$sql = "INSERT INTO user_details (name,email,password,university_type,university,university_course)
            VALUE('{$name}','{$email}','{$password}','{$unitype}','{$uni}','{$unicourse}')";

$result = mysqli_query($connect,$sql);

if($result == 1){
    //echo 'DataBase Go';
    header("Location:../HTML/User Login page.html");
    }
    else
    {
    echo 'database fail';

    //$error = "Username of Password is Invalid";
    }
}
?>