<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
  <link rel="stylesheet" href="../CSS/Admin.css">

  <script type="text/javascript" src="../JS/Admin.js">
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="body">

<img src="../IMAGES/logo.jpg" width="110px" height="110px">

<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="../HTML/admin_home.html">Home</a></li>
		
</h2></ul></hr>

<center><h2>Registered Universities Details</h2></center>

<center><table border="2">
  <tr>
   
    <td><b>Name</b></td>
    <td><b>Password</b></td>
    <td><b>E-Mail</b></td>
    <td><b>Contact Number</b></td>
    <td>Delete</td>
  </tr>

<?php

include "Admin dbConn.php"; 

$records = mysqli_query($db,"select * from uni_registration"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['pass']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['t_number']; ?></td>  
    <td><a href="Admin University delete.php?id=<?php echo $data['id']; ?>"><input type="button" onclick="but()" value="Delete"></a></td>
  </tr>	
<?php
}
?>
</table></center>

<div class="footer">
	<div class="footer-content">
		
		<div class="footer-section about">
			<h1 id="text">UniSup.lk</h1>
			<p id="text">This site represents an online helpdesk for university students.This site allows
			students to choose the coures that best suits has their profrssional qualifications.Therefore this site is helpful for students to choose 
			the university for their choice and the coures.</p>
				<p id="text">Tel: +94 987-654-321 | E-mail: info@uniSup.com</p>
		</div>
		<div class="footer-section links"></div>
			<div id="footerimgW">
				<a href="https://web.whatsapp.com/"><img src="../IMAGES/whatapp.jpg" width="30px" height="30px"></a>
				<a href="https://www.youtube.com/"><img src="../IMAGES/youtube.png" width="30px" height="30px"></a>
				<a href="https://www.facebook.com/"><img src="../IMAGES/facebook.png" width="30px" height="30px"></a>
			</div>
	</div>
	<div class="footer-bottom" id="text">
		&copy; UniSup.com | Designed By IT Group
	</div> 
</div>

</body>
</html>

