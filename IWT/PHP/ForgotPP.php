<?php
session_start();
 
$email=$_SESSION['email'];
$name=$_SESSION['name'];

$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['password'])){
 $error = "Email Not Found!!";
 }
 else
 {

 $password=$_POST['password'];

 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "helpdesk");

 $query = mysqli_query($conn, "SELECT * FROM user_details WHERE email='$email'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){

        $query = "UPDATE user_details SET password='$_POST[password]' where email='$email'";
        $query_run = mysqli_query($conn,$query);
        
        if($query)
        {
        header("Location:../HTML/User Login page.html");
        }
        else
        {
            echo '<script type="text/javascript">alert("Data not update!!")</script>';
        }
 }
 else
 {
    echo '<script type="text/javascript">alert("E-mail Not Found!!")</script>';
 
    //$error = "Username of Password is Invalid";
 }
 mysqli_close($conn);
 }
}
?>