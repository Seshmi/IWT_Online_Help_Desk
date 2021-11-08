<?php

session_start();
$connection = mysqli_connect('localhost','root','','helpdesk');

if(isset($_POST['login']))
{
    $uname = $_POST{'uname'};
    $pass = $_POST{'psw'};

    $sql1 = "SELECT *
            FROM lecturer 
            where L_email='$uname'  ";
    
    $sql2 = "SELECT *
            FROM lecturer
            where  password='$pass' ";

    

    $result1= mysqli_query($connection,$sql1);
    $row1=mysqli_num_rows($result1);

    $result2 = mysqli_query($connection,$sql2);
    $row2=mysqli_num_rows($result2);

    if($row1==1)
    {
        if($row2==1)
        {
            
            header("location:../HTML/Reg_home.php");
            die;
        }
        else
        {
            ?><script> alert("Invalid Password");</script><?php
        }
    }
    else
    {
        ?><script> alert("Invalid Username");</script><?php
    }

}
?>