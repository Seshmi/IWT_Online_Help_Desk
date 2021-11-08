<?php
session_start();

$error='';
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {

 $email=$_POST['email'];
 $pass=$_POST['password'];

 $conn = mysqli_connect("localhost", "root","", "helpdesk");

 $db = mysqli_select_db($conn, "helpdesk");

 $query = mysqli_query($conn, "SELECT * FROM user_details WHERE password='$pass' AND email='$email'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){
    $_SESSION['email']=$email;
    $_SESSION['name']= $name;
    /*$_SESSION['email']=$row['email'];
    $_SESSION['universityt']=$row['university_type'];
    $_SESSION['university']=$row['university'];
    $_SESSION['universityc']=$row['university_course'];*/

 header("Location:../HTML/Reg_home.php");
 }
 else
 {
    header("Location:../HTML/User Login page.html");
    
    //$error = "Username of Password is Invalid";
 }
 mysqli_close($conn);
 }
}
?>