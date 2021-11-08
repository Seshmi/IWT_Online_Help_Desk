<?php 

$connection = mysqli_connect('localhost','root','','helpdesk');



if(isset($_POST['submit']))
{
    
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST{'name'};
    $email =$_POST{'email'};
    $number =$_POST{'number'};
    $info = $_POST{'info'};
    $type = $_POST{'adt'};



    $query="INSERT INTO advertisement(id,name,email,contact_no, type, additional_information, image, published_date_time)
            VALUES('','{$name}','{$email}','{$number}','{$type}','{$info}', '{$file}', NOW())";
   
   $record = mysqli_query($connection,$query);

    if($record)
    {
        
        
        echo header("Location:#");

    }
    else
    {
        echo "Submission Error!!!";
    }




}
?>