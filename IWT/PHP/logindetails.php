<html>
    <head>
<link rel="stylesheet" href="../CSS/php.css">
</head>

<body>

<?php

require 'config.php';

$sql="SELECT u_name,u_pass,dates,times1 FROM logdel ";
$result = $conn->query($sql);

if($result->num_rows>0){

echo"<table><tr><th>User name </th> <th>Password </th> <th>Date</th> <th>time</th> </tr>";

while($row =$result->fetch_assoc()){

 echo"<tr> <td>".$row['u_name']."</td>
 <td>".$row['u_pass']."</td>
 <td>".$row['dates']."</td>
 <td>".$row['times1']."</td> </tr>";

}
echo"</table>";
}
else{
    echo"0 results";
}

$conn->close();



?>
</body>
</html>