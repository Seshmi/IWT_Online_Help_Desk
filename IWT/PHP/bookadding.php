<?php 

$connection = mysqli_connect('localhost','root','','helpdesk');



if(isset($_POST['submit']))
{
    
    $file = addslashes(file_get_contents($_FILES["pic"]["tmp_name"]));
    $username = $_POST{'name'};
    $details = $_POST{'detail'};
    $price = $_POST{'price'};
    $id = $_POST{'Id'};

    $query="INSERT INTO library(ID,Name,image,details,Price)
            VALUES('{$id}','{$username}','{$file}','{$details}','$price')";
   
   $record = mysqli_query($connection,$query);

    if($record)
    {
        
        
        echo "run";

    }
    else
    {
        echo "Please add a small pic";
    }




}
?>