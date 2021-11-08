<html>
    <head>
<link rel="stylesheet" href="../CSS/php.css">


</head>

<body>
<h1 style="font-size:30px;">REGISTRATION DETAILS </h1>
<?php

require 'config.php';

$sql="SELECT names,u_name,pass,email,t_number FROM reg ";
$result = $conn->query($sql);

if($result->num_rows>0){

echo"<table><tr><th> Name </th> <th>User name </th> <th>Password</th> <th>Email</th><th>Phone Number</th> </tr>";

while($row =$result->fetch_assoc()){

 echo"<tr> <td>".$row['names']."</td>
 <td>".$row['u_name']."</td>
 <td>".$row['pass']."</td>
 <td>".$row['email']."</td>
   <td> ".$row['t_number']."</td> </tr>";

}
echo"</table> <br>";
}
else{
    echo"0 results";
}

$conn->close();



?>
<fieldset>
    <legend>UPDATE THE USER PHONE NUMBER </legend>
<form method="POST" action=  "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<lable>Enter the ealier phone number </lable><br>
<input type="text" name="oldph" class="hh"> <br><br>
<lable>Enter the new phone number </lable> <br> 
<input type="text"  name="newph" class="hh"> <br><br>
</fieldset> <br>
<input type="submit"  name="subbut" value="UPDATE" class="button but"> <br>

</form>
<br> 
<?php

require 'config.php';

if(isset($_POST['subbut'])){

  $oldph=$_POST['oldph'];
  $newph=$_POST['newph'];

if($oldph!=""){

    $sql="UPDATE reg SET t_number='$newph' WHERE t_number='$oldph' ";

    if($conn->query($sql)){
        echo"<script type='text/javascript'>
        alert('UPDATED SUCESSFULLY');
        window.location='regdetails.php';
        </script>";
    }else{
        echo"error".$conn->connect_error;
    }
}

}


$conn->close();

?>

<fieldset>
    <legend>DELETE USER DETAILS </legend>

<form method="POST" action=  "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<lable>Enter the Phone number of user </lable><br>
<input type="text" name="ph" class="hh"> <br> <br>
</fieldset> <br>
<input type="submit"  name="subbut1" value="DELETE" class="button but">

</form>

<?php

require 'config.php';

if(isset($_POST['subbut1'])){

  $phnum=$_POST['ph'];
  

if($phnum!=""){

    $sql="DELETE FROM reg WHERE t_number='$phnum'";

    if($conn->query($sql)){
        echo"<script type='text/javascript'>
        alert('DELETED SUCESSFULLY');
        window.location='regdetails.php';
        </script>";
    }else{
        echo"error".$conn->connect_error;
    }
}

}


$conn->close();

?>




</body>
</html>