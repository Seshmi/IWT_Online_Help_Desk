<?php
session_start();
$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['name'])){
 $error = "Email Not Found!!";
 }
 else
 {

 $email=$_POST['email'];
 $name=$_POST['name'];
 
 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "test");

 $query = mysqli_query($conn, "SELECT * FROM ud WHERE email='$email' AND name='$name'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){
        $_SESSION['email']=$email;
        header("Location:../HTML/Forgot password page.html");
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