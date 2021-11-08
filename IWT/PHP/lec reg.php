<?php

$lname=$_POST['lname'];
$lemail=$_POST['lemail'];
$lstream=$_POST['lstream'];
$pas=$_POST['pass'];

$connect = mysqli_connect('localhost','root','','helpdesk');

if(isset($_POST['AL']))
{
    $query1= mysqli_query($connect, "SELECT * FROM lecturer WHERE l_email= '$lemail'");

	if(mysqli_num_rows($query1)>0)
	{
        echo '<script type="text/javascript">alert("Email Already Exist!!")</script>';
    }
    else
    {

    $sql1 = "INSERT INTO lecturer (l_name,l_email,l_stream,password)
                VALUE('{$lname}','{$lemail}','{$lstream}','{$pas}')";

    $result = mysqli_query($connect,$sql1);

if($result == 1)
    {
        //echo "Databace Go";
        header("Location:../HTML/lec register page.html");
    }
    else
    {
    echo "database fail";
    //$error = "Username of Password is Invalid";
    }
}
}
else
if(isset($_POST['submit']))
{
    $query= mysqli_query($connect, "SELECT * FROM lecturer WHERE l_email= '$lemail'");
	if(mysqli_num_rows($query)>0)
	{
        echo '<script type="text/javascript">alert("Email Already Exist!!")</script>';
    }
    else
    {

    $sql = "INSERT INTO lecturer (l_name,l_email,l_stream,password)
                VALUE('{$lname}','{$lemail}','{$lstream}','{$pas}')";

    $result = mysqli_query($connect,$sql);

if($result == 1)
    {
        //echo "Databace Go";
        header("Location:../HTML/University login.html");
    }
    else
    {
    echo "database fail";
    //$error = "Username of Password is Invalid";
    }
}
}
?>