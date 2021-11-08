<?php
session_start();
 
$email=$_SESSION['email'];

$password=$_POST['password'];

$conn = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($conn, "test");

$query = mysqli_query($conn, "SELECT * FROM ud WHERE email='$email'");

$rows = mysqli_num_rows($query);

if($rows == 1){

       $query= "UPDATE ud SET password='$_POST[password]' where email='$email'";
       
       $query_run = mysqli_query($conn,$query);
       
       if($query)
       {
       header("Location:User PorfileP.php");
       }
       else
       {
           echo '<script type="text/javascript">alert("Data not update!!")</script>';
       }
}
?>