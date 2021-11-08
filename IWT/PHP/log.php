<?php
$error='';
if(isset($_POST['submitbut'])){
 if(empty($_POST['uname']) || empty($_POST['psw'])){
 $error = "Username or Password is Invalid";
 }
 else
 {

 $email=$_POST['uname'];
 $pass=$_POST['psw'];

 $conn = mysqli_connect("localhost", "root", "");

 $db = mysqli_select_db($conn, "helpdesk");

 $query = mysqli_query($conn, "SELECT * FROM uni_registration WHERE pass='$pass' AND email='$email'");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){

 header("Location:../HTML/Reg_home.php");
 }
 else
 {
    header("Location:../HTML/University login.html");
    
    //$error = "Username of Password is Invalid";
 }
 mysqli_close($conn);
 }
}
?>