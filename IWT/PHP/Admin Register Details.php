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
<img src="../IMAGES/accpic.png" width="100" height="100" class="accpic">
	<div class="dropdown" style="float:right;" id="accbtn">
	  <button class="btn btn1" class="dropbtn1" >Account</button>
		<div class="dropdown-content">
		  <a href="#">User Login</a>
		  <a href="#">Lecturer Login</a>
		  <a href="#">University Login</a> 
		  <a href="Advertiser Login.html">Advertiser login</a>
		</div>
	</div>
<h2><ul class="nav">
		<li class="lii" class="lii a"><a href="#Home">Home</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn"  href="#">Courses</a>
				<div class="dropdown-content">
					<a href="#">Faculty of Computing</a>
					<a href="#">Faculty of Engineering</a>
					<a href="#">Faculty of Business Management</a>
					<a href="#">Faculty of Information Technology</a>
					<a href="#">Faculty of Architecture</a>
					<a href="#">Faculty of Law</a></li>
		<li class="lii dropdown" class="lii a">
			<a class="dropbtn" href="#">University</a>
				<div class="dropdown-content">
					<a href="#">Government University</a>
					<a href="#">Private University</a></li></div>
		<li class="lii" class="lii a"><a href="#Contact">Contact</a></li>
		<li class="lii" class="lii a"><a href="#FAQ">FAQ</a></li>
		<li class="lii" class="lii a"><a href="#E-Library">E-Library</a></li>
		<li class="lii" class="lii a"><a href="#Feedback">Feedback</a></li>
		<li class="lii" class="lii a"><a href="About.html">About</a></li>
		<li class="lii" class="lii a"><a href="Advertiser Profile.html">My Account</a></li>
		</h2></ul></hr>

<center><h2>Registered Advertisesrs Details</h2></center>

<center><table border="2">
  <tr>
    <td><b>ID</b></td>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b>Username</b></td>
    <td><b>E-Mail</b></td>
    <td><b>Contact Number</b></td>
    <td><b>Password</b></td>
    <td>Delete</td>
  </tr>

<?php

include "Admin dbConn.php"; 

$records = mysqli_query($db,"select * from registration"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['last_name']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['contact_no']; ?></td> 
    <td><?php echo $data['password']; ?></td>   
    <td><a href="Admin Register Details delete.php?id=<?php echo $data['id']; ?>"><input class="delete" onclick="but()" value="Delete"></a></td>
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