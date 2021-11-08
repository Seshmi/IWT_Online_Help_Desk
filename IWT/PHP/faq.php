<?php

$email=$_POST['email'];
$faculty=$_POST['faculty_name'];
$courses=$_POST['courses'];
$question=$_POST['question'];


$connect = mysqli_connect('localhost','root','','faq');

$sql = "INSERT INTO faqs (email,faculty_name,question,course_name)
            VALUE('{$email}','{$faculty}','{$question}','{$courses}')";

$result = mysqli_query($connect,$sql);

if($result == 1){
    echo 'DataBase Go';
    header("Location:../HTMLFAQnew.html");
    }
    else
    {
    echo 'database fail';
    //$error = "Username of Password is Invalid";
    }
?>