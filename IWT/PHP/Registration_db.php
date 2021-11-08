<?php

$fname = $_POST{"fname"};
$lname = $_POST{"lname"};
$uname = $_POST{"uname"};
$email = $_POST{"email"};
$cno = $_POST{"cno"};
$password = $_POST{"password"};


$connection = mysqli_connect('localhost','root','','helpdesk');

$query= mysqli_query($connection, "SELECT * FROM registration WHERE email= '$email'");
if(mysqli_num_rows($query)>0)
{
	echo "Email is already used";
}
else
{
    $sql = "INSERT INTO registration (id, first_name, last_name, username, email, contact_no, password)
            VALUE('', '{$fname}', '{$lname}', '{$uname}', '{$email}', '{$cno}', '{$password}')";

     $result = mysqli_query($connection ,$sql);

    if($result)
        {
            echo header("Location:../HTML/Advertiser Login.html");
        }
    else
        {
            echo '<script type="text/javascript">alert("Fail to Loging!!")</script>';
        }
}

?>