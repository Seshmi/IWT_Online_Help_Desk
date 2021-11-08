<?php

$com = $_POST{"mes"};


$connect = mysqli_connect('localhost','root','','helpdesk');

$sql = "INSERT INTO feedback(ID,comment)
            VALUE('' , '{$com}')";

$result = mysqli_query($connect,$sql);

if($result)
{
    header('Location:../HTML/thank.html');

}
else
{
    echo "database problem";
}

?>