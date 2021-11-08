<?php
session_start();
 
$email=$_SESSION['email'];

$name=$_POST['name'];

$conn = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($conn, "test");

$query = mysqli_query($conn, "SELECT * FROM ud WHERE email='$email'");

$rows = mysqli_num_rows($query);

if($rows == 1 || $rows1 ==1){

       $query = "UPDATE ud SET name='$_POST[name]' where email='$email'";
       
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